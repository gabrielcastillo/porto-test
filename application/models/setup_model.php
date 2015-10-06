<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->dbforge();
  }


  public function create_sessions()
  {
    $args = array(
      'session_id' => array(
        'type'           => 'VARCHAR',
        'constraint'     => 40,
        ),
      'ip_address' => array(
        'type'       => 'VARCHAR',
        'default'        => 0,
        'constraint' => 45,
        ),
      'user_agent' => array(
        'type'       => 'VARCHAR',
        'constraint' => 120,
        ),
      'last_activity' => array(
        'type'       => 'INT',
        'constraint' => 10,
        'unsigned' => TRUE,
        'default'        => 0,
        ),
      'user_data' => array(
        'type' => 'TEXT',
        'null' => TRUE,
        )
      );


    $this->dbforge->add_field($args);
    $this->dbforge->add_key('last_activity');
    $this->dbforge->add_key('session_id', TRUE);
    
    return $this->dbforge->create_table('sessions');
  }

  public function create_staff()
  {

    $args = array(
      'staff_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
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
        'constraint' => 200,
        ),
      'staff_password' => array(
        'type' => 'VARCHAR',
        'constraint' => 128,
        ),
      'staff_last_login' => array(
        'type' => 'DATETIME',
        'default' => '0000-00-00 00:00:00'
        ),
      'staff_role' => array(
        'type' => "ENUM('staff', 'manager', 'administrator')",
        'default' => 'staff',
        'null' => FALSE
        )
      );


    $this->dbforge->add_field($args);
    $this->dbforge->add_key('staff_id', TRUE);
    return $this->dbforge->create_table('staff');

  }
  

  public function create_guests()
  {

    $args = array(
      'guest_id' => array(
        'type' => 'INT',
        'constraint' => 11,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
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
        'constraint' => 200,
        ),
      'guest_password' => array(
        'type' => 'VARCHAR',
        'constraint' => 128,
        ),
      'guest_last_login' => array(
        'type' => 'DATETIME',
        'default' => '0000-00-00 00:00:00'
        )
      );


    $this->dbforge->add_field($args);
    $this->dbforge->add_key('guest_id', TRUE);
    return $this->dbforge->create_table('guests');

  }


  public function create_guests_addresses()
  {

    $args = array(
      'guests_addresses_id' => array(
        'type' => 'INT',
        'constraint' => 22,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
        ),
      'guest_id' => array(
        'type' => 'INT',
        ),
      'guest_address_id' => array(
        'type' => 'INT',
        ),
      );

    $this->dbforge->add_field($args);

    $this->dbforge->add_key('guests_addresses_id', TRUE);
    $this->dbforge->add_key('guest_id');
    $this->dbforge->add_key('guest_address_id');
    return $this->dbforge->create_table('guests_addresses');
  }

  public function create_guest_address()
  {
    $args = array(
      'guest_address_id' => array(
        'type' => 'INT',
        'constraint' => 22,
        'unsigned' => TRUE,
        'auto_increment' => TRUE,
        ),
      'guest_address1' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'guest_address2' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'guest_city' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'guest_state' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      'guest_postal' => array(
        'type' => 'VARCHAR',
        'constraint' => 25,
        ),
      'guest_country' => array(
        'type' => 'VARCHAR',
        'constraint' => 255,
        ),
      );

    $this->dbforge->add_field($args);
    $this->dbforge->add_key('guest_address_id');

    return $this->dbforge->create_table('guest_address');
  }

  public function update_staff_table()
  {
    $args = array(
    'staff_role' => array(
        'type' => "ENUM('staff', 'manager', 'administrator')",
        'default' => 'staff',
        'null' => FALSE
        )
    );
    return $this->dbforge->add_column('staff', $args);
  }


}

/* End of file setup_model.php */
/* Location: ./application/models/setup_model.php */