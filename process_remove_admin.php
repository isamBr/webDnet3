<?php require_once("functions.php"); ?>
<?php 
//protection from sql injection through any select or update

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);


if(isset($_POST['Remove'])){

$uname = trim(mysqli_real_escape_string($conn, $_POST['username']));
//echo $uname;







$new_query ="DELETE FROM `users`.`admin_users` WHERE `admin_users`.`username` = '$uname'";
$verify_query = mysqli_query($conn, $new_query);

if($verify_query){
  
  
  $message = "The user name was successfully deleted";
  redirect_to("admin_welcome.php");
  

}else{
   $message = "The user was not created";
	

}
}else{

	echo "error ";
}

?>