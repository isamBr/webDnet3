<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php 
//protection from sql injection through any select or update

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);


if(isset($_POST['submit'])){

$uname = trim(mysqli_real_escape_string($conn, $_POST['username']));
//echo $uname;



$passName = trim(mysqli_real_escape_string($conn,$_POST['password']));
$hashed_password = sha1($passName);
//echo $hashed_password;


//$query = "INSERT INTO reg_user( username, password) VALUES('{$uname}', '{$hashed_password}')";
$new_query = "INSERT INTO `users`.`reg_user` (`username`, `password`) VALUES ('$uname', '$hashed_password')";

$verify_query = mysqli_query($conn, $new_query);

if($verify_query){
  redirect_to("admin_welcome.php");
  

}else{
  $output = "The user was not created";
  include('output.html.php');


}
}else{
//redirect("register.php");
echo "error ";
}


?>