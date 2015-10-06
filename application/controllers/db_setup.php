<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_setup extends Custom_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function create_database()
  {
    $this->load->model('setup_model');

    if( $this->setup_model->create_sessions() == FALSE ){
      echo 'Sessions table could not be created';
    }

    if( $this->setup_model->create_staff() == FALSE ){
      echo 'Staff table could not be created';
    }

    if( $this->setup_model->create_guests() == FALSE ){
      echo 'Guests table could not be created';
    }

    if( $this->setup_model->create_guests_addresses() == FALSE ){
      echo 'Guest Address could not be created';
    }

  }


}

/* End of file db_setup.php */
/* Location: ./application/controllers/db_setup.php */