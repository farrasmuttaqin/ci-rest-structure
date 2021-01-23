<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_barang extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'CHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'CHAR',
                                'constraint' => '255',
                                'null' => FALSE,
                        ),
                        'price' => array(
                                'type' => 'DOUBLE',
                        ),
                        'created_at' => array(
                                'type' => 'TIMESTAMP',
                        ),
                        'updated_at' => array(
                                'type' => 'TIMESTAMP',
                        ),
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('barang');
        }

        public function down()
        {
                $this->dbforge->drop_table('barang');
        }
}