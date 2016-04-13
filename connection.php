<?php 

require("constants.php"); 



$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


if(!$conn){
$output = 'unable to connect to database';
include('output.html.php');
exit();

}

if(!mysqli_set_charset($conn, 'utf8')){
$output = 'unable to convert the caracter ';
include('output.html.php');
exit();

}

if(!mysqli_select_db($conn, 'users'))
{
$output = 'unable to select database';
include('output.html.php');
exit();


}



 ?>