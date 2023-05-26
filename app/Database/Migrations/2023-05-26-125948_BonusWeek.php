<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BonusWeek extends Migration
{
    public function up()
    {
	    $this->forge->addField([
		    'id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true,
			    'auto_increment' => true,
		    ],
		    'name' => [
			    'type'       => 'VARCHAR',
			    'constraint' => '250',
		    ],
		    'user_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'week_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'bonus_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'repetition' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true
		    ],
		    'score' => [
			    'type'           => 'INT',
			    'constraint'     => 5
		    ],
	    ]);

	    $this->forge->addKey('id', true);
	    $this->forge->addKey(['user_id', 'week_id', 'bonus_id'], false);
	    $this->forge->createTable('bonus_week');
    }

    public function down()
    {
	    $this->forge->dropTable('bonus_week');
    }
}
