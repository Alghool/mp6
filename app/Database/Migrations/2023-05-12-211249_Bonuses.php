<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bonuses extends Migration
{
    public function up()
    {
	    $this->forge->addField([
		    'bonus_id' => [
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
		    'week' => [
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

	    $this->forge->addKey('bonus_id', true);
	    $this->forge->addKey(['user_id', 'week'], false);
	    $this->forge->createTable('Bonuses');
    }

    public function down()
    {
	    $this->forge->dropTable('Bonuses');
    }
}
