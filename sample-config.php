<?php

//API Settings

$wh_url = 'SCHOOL URL'; // https://myschool.org
$wh_user = 'username';
$wh_pass = 'password';


//SSO Config

$sso_config = array(
	"return_url" => "http://". $_SERVER['SERVER_NAME'] . "/sso.php", // URL that Podium should send the user to
	"sso_url" => "",	//Podium Url
	"shared_secret"=>"", //Key from Web Service API - SSO Settings Page
	"timeout" => 60, // How long is token good for
);


