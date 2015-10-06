<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_setup extends Custom_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('setup_model');
  }

  public function create_database()
  {

    if( !$this->db->table_exists('sessions') ){

      try {
        $this->setup_model->create_sessions();
      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }

    if( !$this->db->table_exists('staff') ){
      try {
        $this->setup_model->create_staff();
      } catch ( Exception $e ) {
        echo $e->getMessage();
      }
    }

    if( !$this->db->table_exists('guests') ){
      try {
        $this->setup_model->create_guests();
      } catch ( Exception $e ) {
        echo $e->getMessage();
      }
    }

    if( !$this->db->table_exists('guest_address') ){
      try {
        $this->setup_model->create_guest_address();
      } catch ( Exception $e ) {
        echo $e->getMessage();
      }
    }


    redirect('login');

  }


}

/* End of file db_setup.php */
/* Location: ./application/controllers/db_setup.php */