<?php
include('database_connection.php');

if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_POST['username']);

 $password = stripslashes($_POST['password']);

        $query = "INSERT into `login` (username, password)
VALUES ('$username', '$password')";
        $statement = $connect->prepare($query);
        $statement->execute();
        $count = $statement->rowCount();
        if($count>0){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
		
        }
        else
        {
        	echo "<div class='form'>
<h3>Username already taken.</h3>
<br/>Click here to <a href='login.php'>Signup</a></div>";
			
        }
    }else{
    	   echo "<div class='form'>
<h3>Signup Failed.</h3>
<br/>Click here to <a href='login.php'>Signup</a></div>";
			
    }
   
?>