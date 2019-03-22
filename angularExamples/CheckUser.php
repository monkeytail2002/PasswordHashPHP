<!DOCTYPE html>
<html lang - "en">
	<head>


		<title>Check user</title>



	</head>
	
	<body>
	<?php

	 include("DbConnect.php");

	 session_start();

	 //Now get the information from the sign in form

	 $Email		    =$_POST['Email'];
	 $UserPassword  =$_POST['UserPassword'];

	// echo 'Email is :'.$Email.' and password is '.$UserPassword.'</br>';

	 $Query = "SELECT * FROM userTable
	 WHERE Email = '$Email'";

	 $Result = mysqli_query($DB,$Query);

	 $NumResults = mysqli_num_rows($Result);	

	 if ($NumResults==1)
	 {

	 //	echo 'Found user with matching password.</br></br>';

	 	$Result = mysqli_query($DB,$Query);
	 	$Row = mysqli_fetch_assoc($Result);
        $UserId = $Row['UserId'];
	 	$Email = $Row['Email'];
	 	$UserName = $Row['UserName'];
        $HashedPassword = $Row['UserPassword'];
         
//         echo $UserId."<br>";
//         echo $Email."<br>";
//         echo $UserName."<br>";
//         echo $HashedPassword."<br>";
//         echo $UserPassword."<br>";
         
         
         if (password_verify($UserPassword,$HashedPassword)){
             echo "Password Verified"."<br><br>";            	 	 session_start();

	 	 $_SESSION["UserId"] = $UserId;
	 	 $_SESSION["Email"] = $Email;
	 	 $_SESSION["UserName"] = $UserName;
	 	 $_SESSION["Valid"] = 'True';

	 	 	echo "Hello " .$UserName. "</br></br>";

//			include("angularpage.html");

	 	 	include("page1.html");
                 
         }
         else{
           echo 'test'; 
         }
     }



	 	else
	 	{

	 		echo '<h1>User not found. Please register.</h1>';



	 	}

?>

</body>
</html>

