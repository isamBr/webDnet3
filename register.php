<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("reg_user_header.php");?>
<h2>Add User </h2>
<li><a href="admin_welcome.php">Main Controler</a></li>
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