<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("reg_admin.php");?>
<br/>
<br/>
<?php 

$newQuery = "SELECT * from reg_user";

$verify_query = mysqli_query($conn, $newQuery);


if($verify_query -> num_rows>0){
  
  
  echo "<div id=\"users\">";
  echo "<table width='80%' border='5' align='center' cellpadding='3' cellspacing='3' id='view_messages'>\n";
  echo "<tr><th id='req'>User ID</th>" .
	     "<th id='req'>User name</th>" .
		"&nbsp;</th></tr>\n";
  while($result = $verify_query->fetch_assoc()){
	
	echo "<tr><td>" . $result['id'] . "</td>" .
		     "<td>" . $result['username'] . "</td>" .
			 "</tr>\n";
	
  
  }
 
  echo "</table>\n";
  echo "</div>";

}else{
  $output = "There's no valid user name";
  include('output.html.php');


}
?>

<?php 

$newQuery = "SELECT * from admin_users";

$verify_query = mysqli_query($conn, $newQuery);


if($verify_query -> num_rows>0){
  
  
  echo "<div id=\"users\">";
  echo "<table width='80%' border='5' align='center' cellpadding='3' cellspacing='3' id='view_messages'>\n";
  echo "<tr><th id='req'>Admin ID</th>" .
	     "<th id='req'>Admin name</th>" .
		"&nbsp;</th></tr>\n";
  while($result = $verify_query->fetch_assoc()){
	
	echo "<tr><td>" . $result['id'] . "</td>" .
		     "<td>" . $result['username'] . "</td>" .
			 "</tr>\n";
	
  
  }
 
  echo "</table>\n";
  echo "</div>";

}else{
  $output = "There's no valid user name";
  include('output.html.php');


}
?>

<?php 
//change it to suite pi table name
$newQuery = "SELECT * from pi_users";

$verify_query = mysqli_query($conn, $newQuery);


if($verify_query -> num_rows>0){
  
  //echo "<br/>";
  echo "<div id=\"use\">";
  echo "<table width='80%' border='5' align='center' cellpadding='3' cellspacing='3' id='view_messages'>\n";
  echo "<tr><th id='req'>User ID</th>" .
	     "<th id='req'>User name</th>" .
		"&nbsp;</th></tr>\n";
  while($result = $verify_query->fetch_assoc()){
	
	echo "<tr><td>" . $result['id'] . "</td>" .
		     "<td>" . $result['username'] . "</td>" .
			 "</tr>\n";
	
  
  }
 
  echo "</table>\n";
  echo "</div>";

}else{
  $output = "There's no valid Pi user's at the moment";
  include('output.html.php');


}

?>

</body>
</html>