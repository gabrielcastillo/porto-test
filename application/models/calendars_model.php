<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendars_model extends CI_Model {


  public function __construct()
  {
    parent::__construct();
  }

  public function getCalendarData( $type )
  {
     $query = $this->db->query("SELECT * FROM reservations WHERE type=" . $type);

     return $query;
  }
  

}

/* End of file calendars_model.php */
/* Location: ./application/models/calendars_model.php */