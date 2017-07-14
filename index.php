<?php

require_once( dirname(__FILE__) .'/classes/class-api-wh.php' );

//Remove this - File is used to keep accounts out of source controll
require_once( dirname(__FILE__) .'/config.php' );

echo '<pre>';
$api = new WH_API( $wh_url, $wh_user, $wh_pass, false);

try{


$dat = $api->get_current_user( );

	print_r($dat);



} catch (Exception $e) { 

      echo 'Caught exception: ' . $e->getMessage(); 

  }

  echo '</pre>';

