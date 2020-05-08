<?php
session_start();
unset($_SESSION['userData']);
unset($_SESSION['access_token']);
unset($_SESSION['accessToken']);
unset($_SESSION['id']);
unset($_SESSION['givenName']);
unset($_SESSION['familyName']);
unset($_SESSION['email']);
unset($_SESSION['picture']);
session_destroy();
header("Location: login.php");
?>