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

    if( $this->setup_model->create_sessions() == FALSE ){
      die('Sessions table could not be created');
    }

    if( $this->setup_model->create_staff() == FALSE ){
      die('Staff table could not be created');
    }

    if( $this->setup_model->create_guests() == FALSE ){
      die('Guests table could not be created');
    }

    if( $this->setup_model->create_guests_addresses() == FALSE ){
      die('Guest Address could not be created');
    }

    if( $this->setup_model->create_guest_address() == FALSE ){
      die('Guest address not created');
    }

    redirect('login');

  }


}

/* End of file db_setup.php */
/* Location: ./application/controllers/db_setup.php */