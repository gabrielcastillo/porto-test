<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_migration extends Custom_Controller {


  public function __construct()
  {
    parent::__construct();
  }

  public function version( $id )
  {

    $this->load->library('migration');

    $this->migration->version($id);
  }


}

/* End of file db_migration.php */
/* Location: ./application/controllers/db_migration.php */