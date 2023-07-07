<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nombre_usuario'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'contrasena'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                        'rol'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                        ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('Usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('Usuarios');
        }
}