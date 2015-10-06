<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Guests extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'guest_id' => array(
        'type' => 'INT',
        'constraint' => 22,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'guest_fname' => array(
        'type' => 'VARCHAR',
        'constraint' => 50,
      ),
      'guest_lname' => array(
        'type' => 'VARCHAR',
        'constraint' => 50,
        ),
      'guest_email' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'guest_home_phone' => array(
        'type' => 'VARCHAR',
        'constraint' => 20,
      ),
      'guest_last_visit' => array(
        'type' => 'DATETIME',
        'default' => '0000-00-00 00:00:00'
        ),
    ));

    $this->dbforge->add_key('guest_id', TRUE);
    $this->dbforge->create_table('guests');
  }


}



