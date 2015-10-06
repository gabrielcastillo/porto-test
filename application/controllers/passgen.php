<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passgen extends Custom_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    echo hash('sha256', 'gabriel@stellervision.com' . '|' . 'password');
  }

}

/* End of file passgen.php */
/* Location: ./application/controllers/passgen.php */