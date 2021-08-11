<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMovies extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
                  'type' => 'INT',
                  'constraint' => 5,
                  'unsigned' => true,
                  'auto_increment' =>true
			],
			'movie_name' => [
                  'type' => 'VARCHAR',
                  'constraint' => 128,
				  'null' => false,
			],
			'lead_actor'=>[
 					'type' => 'VARCHAR',
 					'constraint' => 255,
					 'null' => false,
			],
			'actress' => [
				     'type' => 'VARCHAR',
 					'constraint' => 255,
                     'null' => false, 
			],
			'year_of_release' => [
				     'type' => 'INT',
 					'constraint' => 4,
                     'null' => false, 
			],
			'director_name' => [
				     'type' => 'VARCHAR',
 					'constraint' => 255,
                     'null' => false, 
			],

			 'created_at' => [
                	'type' => 'DATETIME',
                	'null' => true,	
                	'default' =>null
                ],
                'updated_at' => [
                	'type' => 'DATETIME',
                	'null' => true,	
                	'default' =>null
                ]
		]);
    //add constraints
		$this->forge->addPrimaryKey('id')
		            ->addUniqueKey('movie_name');
		 //create table           
		$this->forge->createTable('Movies');
	}

	public function down()
	{
		$this->forge->dropTable('Movies');
	}
}
