<?php

	//echo $_POST["email"];
	
	//Defineerime muutuja
	$email_error ="";
	$password_error = "";
	
	//kontrollin, kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		echo "jah";
	
		//kas e-post on tühi
		if ( empty($_POST["email"])	) {
			
			//jah oli tühi
			$email_error = "See väli on kohustuslik";
	
	}

	// kas parool on tühi
			if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			//kui oleme siia jõudnud siis parool ei ole tühi
			if(strlen($_POST["password"]) < 6) {
				
				$password_error = "Parool peab olema vähemalt 6 tähemärki pikk.";
			}		
		}
	}
	
	
	
?>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<h2>Logi sisse</h2>
	<form action="login.php" method="post">
	<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?>	<br><br>
	<input name="password" type="password" placeholder="Parool" > <?php echo $password_error ?>	<br><br>
	<input type="submit" value="Logi sisse" >	<br><br>
	</form>
	
	



</body>
</html>