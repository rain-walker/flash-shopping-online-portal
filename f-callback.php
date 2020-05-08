<?php
require_once "f-config.php";
try{
    $accessToken = $helper->getAccessToken();
    
}catch(\Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exception: ".$e->getMessage();
    exit();
}catch(\Facebook\Exceptions\FacebookSDKException $e){
    echo "FacebookS DK Exception: ".$e->getMessage();
    exit();
}
if(!$accessToken){
    header( 'Locaton: login.php');
    exit();
}
$oAuth2Client = $FB->getOAuth2Client();
if(!$accessToken->isLongLived()){
    $accessToken=$oAuth2Client->getLongLivedAccessToken($accessToken);
}
$response=$FB->get("/me?fields=id,first_name,last_name,email,picture.type(large)", $accessToken);
$userData= $response->getGraphNode()->asArray();
$_SESSION['userData']=$userData;
$_SESSION['accessToken']=(string) $accessToken;
header('Location: index.php');
?>