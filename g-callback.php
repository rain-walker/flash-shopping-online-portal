<?php
require_once "g-config.php";
session_start();
if(isset($_SESSION['access_token']))
{
    $gclient->setAccessToken($_SESSION['access_token']);
}
else if(isset($_GET['code'])){
    //echo $_GET['code'];
    //$token=$gclient->fetchAccessTokenWithAuthCode($_GET['code']);
    $token=$gclient->authenticate($_GET['code']);
        $_SESSION['access_token']=$token;
    
}else{
    //header('Location: login.php');
}
$oAuth= new Google_Service_Oauth2($gclient);
$Data=$oAuth->userinfo_v2_me->get();

$_SESSION['id']=$Data['id'];
$_SESSION['givenName']=$Data['givenName'];
$_SESSION['familyName']=$Data['familyName'];
$_SESSION['email']=$Data['email'];
$_SESSION['picture']=$Data['picture'];
header("Location: index.php");
?>