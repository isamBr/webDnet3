<?php require_once("session.php"); ?><!--You don't have this defined yet!-->
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?><!--You don't have this defined yet!-->

<?php include("reg_user_header.php");?>
<?php 
$red ="<font color=\"red\">";
echo "$red" . $message . "</font>"; ?>
<li><a href="remove.php">Return to main page</li>
<li><a href="logout.php">logout</a></li>
</ul>
</body>
</html>