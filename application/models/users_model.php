<?php if( ! defined( 'BASEPATH' ) ) die('No Direct Script Access Allowed!');

class Users_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function authenticate_user( $email )
	{
		$query = $this->db->get_where('staff', array('staff_email' => $email));

		if( $query->num_rows() == 1 ){
			return $query->row();
		}else{
			return FALSE;
		}
	}


}