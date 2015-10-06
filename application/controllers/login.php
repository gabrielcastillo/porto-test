<?php if( ! defined( 'BASEPATH' ) ) die('Direct Access Not Allowed!');

class Login extends Custom_controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper( 'form' );
		$this->load->model('users_model');

		$this->form_validation->set_error_delimiters('','');
	}

	public function index() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if( $this->form_validation->run() != FALSE ){

			$record = $this->users_model->authenticate_user($this->input->post('email', TRUE));

			if( $record == FALSE ){
				$this->session->set_flashdata('message', 'Email not found!');
				redirect('login');
			}else{
				if( $record->staff_password != hash('sha256', $this->input->post('email', TRUE) . '|' . $this->input->post('password', TRUE)) ){
					$this->session->set_flashdata('message', 'Incorrect password!');
					$this->session->set_userdata('email', $this->input->post('email', TRUE));
					redirect('login');
				}else{

					$_SESSION['staff_name'] 	= $record->staff_fname . ' ' . $record->staff_lname;
					$_SESSION['staff_email'] 	= $record->staff_email;
					$_SESSION['staff_id'] 		= $record->staff_id;
					$_SESSION['staff_role'] 	= $record->staff_role;

					session_write_close();
					redirect('dashboard');
				}
			}

		}else{
			$this->load->view( 'header', $this->data );
			$this->load->view( 'login' );
			$this->load->view( 'footer' );

			$this->session->unset_userdata('email');
		}
	}

	public function reset()
	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');

		if( $this->form_validation->run() != FALSE ){

			$password = $this->generate_password();

			$this->load->library('email');

			$config[''] = '';
			$config[''] = '';
			$config[''] = '';
			$config[''] = '';
			$config[''] = '';

			$this->email->initialize($config);

			$this->email->to($this->input->post('email', TRUE));
			$this->email->from('no-reply@' . $_SERVER['HTTP_HOST']);
			$this->email->subject('Password Reset Request');

			$this->email->message($password);

			if( $this->email->send() ){
				$this->session->set_flashdata('message', 'email has been sent');
			}else{
				$this->session->set_flashdata('message', 'email not sent');

				$this->email->debugger();
			}

			redirect('login');
		}else{

			$this->load->view( 'header', $this->data );
			$this->load->view( 'reset-password' );
			$this->load->view( 'footer' );
		}
	}

	public function logout()
	{
		session_destroy();
		$this->session->sess_destroy();
		redirect('login');
	}

	private function generate_password($length = 10)
	{
		$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

		return $randomString;
	}







}