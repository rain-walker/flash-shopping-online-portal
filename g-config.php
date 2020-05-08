<?php 
require_once('Google/src/Google/autoload.php');
include("config.php");
$gclient = new Google_Client();
//$gclient->setAuthConfig('client_secret.json');
$gclient->setClientId($gid);
$gclient->setClientSecret($gcecret);
$gclient->setApplicationName('Wish - Have fun shopping');
//$gclient->setApplicationName('Hotel Vaishali');
$gclient->setRedirectUri('https://' . $_SERVER['HTTP_HOST'] . '/g-callback.php');
//$gclient->setLoginHint('teltumbade.s.aniket@gmail.com');
//$gclient->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
//$gclient->setApprovalPrompt('consent');//option select_account
$gclient->addScope('email');
$gclient->addScope('profile');
?>