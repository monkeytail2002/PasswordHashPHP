<!DOCTYPE html>
<html lang - "en">
	<head>
		<meta charset ="utf-8">
		<meta http=equiv="X-UA-Compatible" content ="IE=edge">
		<meta name="viewport" content ="width=device-width, initial-scale=1">
		<meta name ="description" content="">
		<meta name="author" content="">


		<title>PHP Test</title>

		<!-- bootstrap core CSS -->

	</head>
	
	<body>



		<div clas="container">

			<form method="post" action="CheckUser.php">
				 <h2>Please sign in</h2>




				 <label for="inputEmail">Email address</label>
				 	<input type="email" id="inputEmail" name="Email" placeholder="Email address" required autofocus>



				 <label for="inputPassword">Password</label>
				 	<input type="password" id="inputPassword" name="UserPassword" placeholder="UserPassword" required>


				 <button type="submit">Sign in</button>
			

			 </form>
            
            

		 </div><!--/container -->
        
        <div class="reguser">
        
        <p2>New User?  Please click the button below to register with us</p2>
            <form action="RegUser.php">
                    <input type="submit" value="Register here!" />
            </form>
        </div>



	</body>

</html>


