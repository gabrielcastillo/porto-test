<?php if( ! defined( 'BASEPATH' ) ) die('No Direct Script Access Allowed!');

class Dashboard extends Custom_controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header', $this->data);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	
}