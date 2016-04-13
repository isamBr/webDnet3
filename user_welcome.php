<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("reg_user_header.php");?>





<?php 
$newQuery = "SELECT * from pi_users where username = '$username'";

$verify_query = mysqli_query($conn, $newQuery);


if($verify_query -> num_rows>0){
  
  echo "<br/>";
  echo "<div id=\"use\">";
  echo "<table width='80%' border='5' align='center' cellpadding='3' cellspacing='3' id='view_messages'>\n";
  echo "<tr><th id='req'>User ID</th>" .
	     "<th id='req'>User name</th>" .
		"<th>&nbsp;</th></tr>\n";
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