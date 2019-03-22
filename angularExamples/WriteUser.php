<html>
<head>
    <title>Write User</title>

</head>
<body>
    
<form METHOD="LINK" ACTION="index.php">
    
<?php
  include("DbConnect.php");              // Add in the database connection details
session_start();
  // Get the information from  RegUser.php

  $Email		 = mysqli_real_escape_string($DB, $_POST['Email']);
  $Password      = mysqli_real_escape_string($DB, $_POST['UserPassword']);
  $Username      = mysqli_real_escape_string($DB, $_POST['UserName']);
 
  
  //Hash the password
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
    
    
/*print_r($Email);  This tests whether the information pulled through correctly */

    /* Inserts data into WaterUser table */
    
  $Query = "insert into userTable (Email, UserName, UserPassword) values ('$Email','$Username','$hashed_password')";
  
 
  $Result = mysqli_query($DB,$Query); 	

    /*This test if there is a result.  If there is then the user is informed that they are successful, and if no result then informed that the system is unable to complete the operation. */
 if ($Result == TRUE){
	
	echo 'User login details inserted';
     echo "<br>";
     echo "<br>";
    echo "<input TYPE='submit' VALUE='Back to Login'>";
 }
 else {

	echo 'Sorry - unable to complete the operation at present';
     echo "<br>";
     echo "<br>";
    echo "<input TYPE='submit' VALUE='Back to Login'>";
    }

?>


</form>

</body>
</html>


