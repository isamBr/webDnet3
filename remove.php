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

<h1>In Security !</h1>
<h2>Remove menu</h2>
<!--methode of send form request either post or get one show everything visible other hide-->
<form method="POST" action="process_remove.php">
<li><a href="wecome.php">Main Controler</a></li>
Username:<input type="text" name="username" ><br/>


<input type="submit" value="Remove" name="Remove">
</form>

</body>
</html>

<?php 
// close sql connection
mysqli_close($conn);


?>