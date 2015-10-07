<?php


  function is_ajax()
  {

    $CI =& get_instance();

    if( !$CI->input->is_ajax_request() ){
      die('No Direct Script Access Allowed');
    }
  }

  function alert_message( $type, $message )
  {
    $html = '';

    $html .= '<div class="alert alert-'.$type.'">';
    $html .= '<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>';
    $html .= $message;
    $html .= '</div>';

    return $html;
  }