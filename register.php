<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<html>
<head>
<title>BTN Production</title>
<link type="text/css" rel="stylesheet" href="main.css"/><style>
#users{
float: left;
width:300px;
height:200px;


}
</style>
</head>
<body>

<h1 >In Security !</h1>
<h2>Add User menu  </h2>
<li><a href="wecome.php">Main Controler</a></li>
<!--methode of send form request either post or get one show everything visible other hide-->
<form method="POST" action="process_user.php">
Username:<input type="text" name="username" ><br/>
Password:<input type="password" name="password" ></br>

<input type="submit" value="Register" name="submit">
</form>

</body>
</html>

<?php 
// close sql connection
mysqli_close($conn);


?>