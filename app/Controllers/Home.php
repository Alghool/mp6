<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
	    $parser = \Config\Services::parser();
	    return $parser->render('home');
    }

    public function week($weekNumber){

	    $db      = \Config\Database::connect();
	    $builder = $db->table('users');
	    $users   = $builder->get()->getResult('array');

	    foreach ($users as &$user){
	    	$score = $db->table('scores')->where('user_id', $user['user_id'])->where('week', $weekNumber)->get()->getResultArray();
	    	$user['score'] = empty($score) ? $this->getDays($weekNumber): $score ;
	    }

	    $bonuses = $db->table('bonuses')->where('week', $weekNumber)->get()->getResultArray();
		foreach ($bonuses as &$bonus ){
			$bonus['user'] = $db->table('users')->select('name')->where('user_id', $bonus['user_id'] )->get()->getRow()->name;
	    }

	    $data = [];
	    $data['users'] = $users;
	    $data['bonuses'] = $bonuses;

	    $parser = \Config\Services::parser();
	    return $parser->setData($data)->render('week');
	}

	public function update(){
		$request = \Config\Services::request();
		$post = $request->getPost();
		$data = [];
		foreach ($post['day'] as $date => $myDay){
			$myDay['user_id'] = $post['user_id'];
			$myDay['week'] = $post['week'];
			$myDay['date'] = $date;
			$data[] = $myDay;
		}
		$db = \Config\Database::connect();

		$db->table('scores')->insertBatch($data);
    	dd($request->getPost());
	}

	private function getDays($weekNumber){
		$startDay  = strtotime('7-5-2023');
		$firstDay = (($weekNumber * 7) - 7) * 86400 + $startDay;

		return [
			[
				'score_id' => 0,
				'day' => 'Sunday',
				'date' => $firstDay
			],
			[
				'score_id' => 0,
				'day' => 'Monday',
				'date' => $firstDay + 86400
			],
			[
				'score_id' => 0,
				'day' => 'Tuesday',
				'date' => $firstDay + ( 86400 * 2 )
			],
			[
				'score_id' => 0,
				'day' => 'Wednesday',
				'date' => $firstDay + ( 86400 * 3 )
			],
			[
				'score_id' => 0,
				'day' => 'Thursday',
				'date' => $firstDay + ( 86400 * 4 )
			],
			[
				'score_id' => 0,
				'day' => 'Friday',
				'date' => $firstDay + ( 86400 * 5 )
			],
			[
				'score_id' => 0,
				'day' => 'Saturday',
				'date' => $firstDay + ( 86400 * 6 )
			],
		];
	}
}
