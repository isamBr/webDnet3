<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("reg_user_header.php");?>
<!--methode of send form request either post or get one show everything visible other hide-->
<form method="POST" action="process_remove_admin.php">
<li><a href="admin_welcome.php">Main Controler</a></li>
Username:<input type="text" name="username" ><br/>


<input type="submit" value="Remove" name="Remove">
</form>

</body>
</html>

<?php 
// close sql connection
mysqli_close($conn);


?>