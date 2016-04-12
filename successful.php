<?php require_once("session.php"); ?><!--You don't have this defined yet!-->
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?><!--You don't have this defined yet!-->
<html>
<head>
<title>Successfully remove</title>
<link type="text/css" rel="stylesheet" href="main.css"/><style>
#users{
float: left;
width:300px;
height:200px;


}
</style>
</head>
<body>
<ul>
<h1>Main Controller</h1>
<?php 
$red ="<font color=\"red\">";
echo "$red" . $message . "</font>"; ?>
<li><a href="remove.php">Return to main page</li>
<li><a href="logout.php">logout</a></li>
</ul>
</body>
</html>