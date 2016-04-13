<?php include("header.php");?>
<br/>
<br/>
<br/>
<?php if(!empty($message)) {echo "<p class=\"message\">" . $message . "</p>"; } ?>
<form action="process_login.php" method="POST">
Username:<input type="text"  size="30" name="username" value="<?php //echo htmlentities($username); ?>" /><br/>
Password:<input type="password" size="30" name="password" value="<?php //echo htmlentities($password); ?>" /></br>

<input type="submit" value="login" name="submit">
</form>
</body>
</html>