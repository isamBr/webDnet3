<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php
    $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	
    if (logged_in ()) {
        redirect_to("user_welcome.php");
    }
        
        
        
        
    if (isset($_POST['submit']) ) {
	
	
		$username = sanisInput(mysqli_real_escape_string($conn,$_POST['username']));
        $password = sanisInput(mysqli_real_escape_string($conn,$_POST['password']));
        
        $hashed_password = sha1($password);
            // Check database to see if username and the hashed password exist there.
			//"SELECT `users`.`reg_user` (`username`, `password`) VALUES ('$uname', '$hashed_password')";
            $query = "SELECT id, username ";
            $query .= "FROM `users`.`reg_user`";
            $query .= "WHERE username = '{$username}' ";
            $query .= "AND password = '{$hashed_password}' ";
            $query .= "LIMIT 1";
            $result_set = mysqli_query($conn,$query);
			//echo $result_set;
            //confirm_query($result_set);
                    if (!$result_set) {
            
                    $output="<b>This is embarrassing, we will try now to resolve this!!</b>";
                    include 'output.html.php';
                    exit();
            
                }
            
            if (mysqli_num_rows($result_set) == 1) {
                // username/password authenticated
                // and only 1 match
                $found_user = mysqli_fetch_array($result_set);
                $_SESSION['user_id'] = $found_user['id'];
                $_SESSION['username'] = $found_user['username'];
                
                redirect_to("user_welcome.php");
            } else {
                $red ="<font color=\"red\">";
                // username/password combo was not found in the database
                    $message = "$red Username/password combination incorrect.<br />
                    Please make sure your caps lock key is off and try again.</font>";
					redirect_to("user_login.php");
            }
        } else {
            echo "Error";
        
        }
            
 ?>