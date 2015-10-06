<?php if( ! defined( 'BASEPATH' ) ) die('No Direct Script Access Allowed!');

class Custom_controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->data['sitename'] = 'Booking System';

	}



}