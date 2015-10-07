<?php

  function ci_instance()
  {
    $CI =& get_instance();

    return  $CI;
  }

  //Check if http request is ajax
  function is_ajax()
  {
    if( !ci_instance()->input->is_ajax_request() ){
      die('No Direct Script Access Allowed');
    }
  }

  //Display Alert Messages
  function alert_message( $type, $message )
  {
    $html = '';

    $html .= '<div class="alert alert-'.$type.'">';
    $html .= '<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>';
    $html .= $message;
    $html .= '</div>';

    return $html;
  }

  function current_page( $caps = FALSE )
  {
    $row = '';
    $segments = ci_instance()->uri->segment_array();
    $last_key = end($segments);

    foreach( $segments as $value ){

      if( $value == $last_key ){
        if( $caps == FALSE ){
          $row .= '<span class="">'. $value . '</span>';
        }else{
          $row .= '<span class="">'. ucfirst($value) . '</span>';
        }
      }
    }

    return $row;
  }
