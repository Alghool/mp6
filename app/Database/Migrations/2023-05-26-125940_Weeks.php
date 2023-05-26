<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Weeks extends Migration
{
    public function up()
    {
	    $this->forge->addField([
		    'week_id' => [
			    'type'           => 'INT',
			    'constraint'     => 5,
			    'unsigned'       => true,
			    'auto_increment' => true,
		    ],
		    'name' => [
			    'type'       => 'VARCHAR',
			    'constraint' => '250',
		    ]
	    ]);

	    $this->forge->addKey('week_id', true);
	    $this->forge->createTable('weeks');
    }

    public function down()
    {
	    $this->forge->dropTable('weeks');
    }
}
