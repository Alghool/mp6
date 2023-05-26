<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Scores extends Migration
{
    public function up()
    {
	    $this->forge->addField([
		    'score_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true,
			    'auto_increment' => true,
		    ],
		    'user_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'week' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'day' => [
			    'type'       => 'VARCHAR',
			    'constraint' => '250',
		    ],
		    'date' => [
			    'type'       => 'VARCHAR',
			    'constraint' => '250',
		    ],
		    'wakeup' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'midday_sleep' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'sleep' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'morning_teeth' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'night_teeth' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'fajer' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'dohr' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'aser' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'maghrb' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'eshaa' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'breakfast' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'lunch' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'dinner' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'fruit' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'total' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ]
	    ]);
	    $this->forge->addKey('score_id', true);
	    $this->forge->addKey(['user_id','week'], false);
	    $this->forge->createTable('scores');
    }

    public function down()
    {
	    $this->forge->dropTable('scores');
    }
}
