<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Staff extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'staff_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'staff_fname' => array(
        'type' => 'VARCHAR',
        'constraint' => 50,
      ),
      'staff_lname' => array(
        'type' => 'VARCHAR',
        'constraint' => 50,
        ),
      'staff_email' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'staff_password' => array(
        'type' => 'VARCHAR',
        'constraint' => 150,
      ),
      'staff_last_login' => array(
        'type' => 'DATETIME',
        'default' => '0000-00-00 00:00:00'
        ),
    ));

    $this->dbforge->add_key('staff_id', TRUE);
    $this->dbforge->create_table('staff');
  }

  /*public function down()
  {
    $this->dbforge->drop_table('staff');
  }*/

}



