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
		    'score' => [
			    'type'           => 'INT',
			    'constraint'     => 5
		    ],
		    'is_archive' =>[
		    	'type' => 'BOOLEAN',
			    'default' => '0'
		    ]
	    ]);

	    $this->forge->addKey('bonus_id', true);
	    $this->forge->createTable('bonuses');
    }

    public function down()
    {
	    $this->forge->dropTable('bonuses');
    }
}
