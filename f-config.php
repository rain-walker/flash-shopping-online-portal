<?php
session_start();
require_once('Facebook/src/Facebook/autoload.php');
include("config.php");
$FB = new \Facebook\Facebook([
	'app_id' => $fid,
	'app_secret' => $fsecret,
	'default_graph_version' => 'v2.10'
]);

$helper = $FB -> getRedirectLoginHelper();


?>