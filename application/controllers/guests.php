<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guests extends Custom_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    
  }

  private function _getCalendarData( $type )
  {
    is_ajax();
    $this->load->model('calendars_model');

    $return = $this->calendars_model->_getCalendarData($type);


    $this->output->set_content_type('application/json')->set_output(json_encode($return));
  }

}

/* End of file guests.php */
/* Location: ./application/controllers/guests.php */