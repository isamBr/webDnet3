<?php require_once("functions.php"); ?>
<?php 
//protection from sql injection through any select or update

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);


if(isset($_POST['Remove'])){

$uname = trim(mysqli_real_escape_string($conn, $_POST['username']));
//echo $uname;






//"INSERT INTO `users`.`reg_user` (`username`, `password`) VALUES ('$uname', '$hashed_password')";
//$new_query = "DELETE FROM `users`.`reg_user` WHERE `reg_user`.`username` = '$uname'"
$new_query ="DELETE FROM `users`.`reg_user` WHERE `reg_user`.`username` = '$uname'";
$verify_query = mysqli_query($conn, $new_query);

if($verify_query){
  //redirect_to("wecome.php");
  
  $message = "The user name was successfully deleted";
  include('successful.php');
  

}else{
   $message = "The user was not created";
	include('successful.php');

}
}else{
//redirect("register.php");
	echo "error ";
}


?>