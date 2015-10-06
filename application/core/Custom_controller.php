<?php if( ! defined( 'BASEPATH' ) ) die('No Direct Script Access Allowed!');

class Custom_controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
    $this->_checkdatbasetables();
		session_start();
		$this->data['sitename'] = 'Booking System';
    $this->output->enable_profiler(TRUE);
	}


  private function _checkdatbasetables()
  {
    if( $this->db->table_exists('sessions') === FALSE ){
      if( $this->uri->segment(1) != 'db_setup' ){
        exit ('sessions table not found, run database install script');
      }
    }else{
      $this->load->library('session');
    }

  }


}