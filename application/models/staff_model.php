<?php if( ! defined( 'BASEPATH' ) ) die('No Direct Script Access Allowed!');

class Staff_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function authenticate_user( $email )
	{
		$query = $this->db->get_where('staff', array('staff_email' => $email));

		if( $query->num_rows() == 1 ){
			$this->db->where('staff_email', $email);
			$this->db->update('staff', array('staff_last_login' => date('Y-m-d H:i:s')));
			return $query->row();
		}else{
			return FALSE;
		}
	}

	public function update_staff_password( $email, $password )
	{
		$this->db->where('staff_email', $email);

		$this->db->update('staff', array('staff_password' => $password));

		if( $this->db->affected_rows() == 1 ){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}