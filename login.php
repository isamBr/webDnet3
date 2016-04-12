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
<h2>Main Controller</h2>
<br/>
<?php if(!empty($message)) {echo "<p class=\"message\">" . $message . "</p>"; } ?>
<form action="process_login.php" method="POST">
Username:<input type="text"  size="30" name="username" value="<?php //echo htmlentities($username); ?>" /><br/>
Password:<input type="password" size="30" name="password" value="<?php //echo htmlentities($password); ?>" /></br>

<input type="submit" value="login" name="submit">
</form>
</body>
</html>