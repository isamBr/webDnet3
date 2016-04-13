<?php require_once("functions.php"); ?><!--You don't have this defined yet!-->
<?php 
session_start();



$_SESSION = array();


if(isset($_COOKIE[session_name()])){
setcookie(session_name(), '', time()-42000, '/');


}

session_destroy();

redirect_to("login.php?logout=1");



?>