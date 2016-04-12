<?php require_once("session.php"); ?><!--You don't have this defined yet!-->
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?><!--You don't have this defined yet!-->
<html>
<head>
<title>Welcome to our home page</title>
<link type="text/css" rel="stylesheet" href="main.css"/><style>
#users{
float: left;
width:300px;
height:200px;


}
</style>
</head>
<body>
 <?php
      
      $connector = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
        echo "Connections are made successfully:";
      

      //execute the SQL query and return records
      
	  $query = "SELECT id, username ";
      $query .= "FROM `reg_user`";
	  //`users`.`reg_user`
      $result_set = mysqli_query($connector,$query);
	  
	  
      ?>
<ul>
<h1>In Security !</h1>
<h2>Main Controller</h2>
<li><a href="remove.php">Remove User</li>
<li><a href="register.php">Add User</a></li>
<li><a href="logout.php">logout</a></li>
</ul>


<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>User_id</th>
          <th>User_Name</th>
          <td>user_password</td>
        </tr>
      </thead>
      <tbody>
         <?php
          while ($array = mysql_fetch_row( $result_set));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
    }
        ?>
		
		
		
      </tbody>
	  
    </table>
	
	<table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Rasberry_id</th>
          <th>Rasberry_state</th>
          <td>Rasberry_status</td>
        </tr>
      </thead>
      <tbody>
        
		
		
		
      </tbody>
	  
    </table>
     
</body>
</html>