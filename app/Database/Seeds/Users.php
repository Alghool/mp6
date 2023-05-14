<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
	    $data = [
		    ['name' => 'Mahmoud Alghool'],
		    ['name' => 'Nada Ahmed'],
		    ['name' => 'Jasmine Mahmoud']
	    ];
	    // Using Query Builder
	    $this->db->table('users')->insertBatch($data);
    }
}
