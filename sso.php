<?php

require_once( dirname(__FILE__) .'/classes/class-api-sso.php' );

//Remove this - File is used to keep accounts out of source controll
require_once( dirname(__FILE__) .'/config.php' );


?>
<h2>WebserviceAPI</h2>
<?php

$wh_sso = new WH_SSO($sso_config);

$podium_sso_url = $wh_sso->get_url();
echo '<a href="'.$podium_sso_url.'">Click to test SSO</a><br>';

if(isset($_GET['wh_s'])){
	echo "<br><pre>";
	print_r($wh_sso->validate_token());
	echo "</pre>";
}

$podium_sso_url = $wh_sso->sign_out();
echo '<a href="'.$podium_sso_url.'">Click to test SSO</a><br>';

