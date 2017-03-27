<!DOCTYPE html>
<html>
	<head>
		<title>Quiz2</title>
		<link rel="stylesheet" type="text/css" href= "css.css">
	</head>
	<body>
		<?php
			$visited= $_COOKIE["visited"];
			if(!isset($visited)){
		?>
			<h2>Sign up for MY.PITT.EDU</h2>
			<form id= "myForm" action= "register.php" method= "post">
				<input type= "text" name= "Firstname" placeholder= "Firstname">
				<input type= "text" name= "Lastname" placeholder= "Lastname">
				<input type= "email" name= "Email" placeholder= "Email">
				<input type= "submit" name= "submit">
			</form>
		<?php
			}
			else{
				$first= $_COOKIE["firstname"]; 
				$email= $_COOKIE["email"];
				echo "Hi, $first. You recently signed up with the email address: $email , thank you!";
			}
		?>
	</body>
</html>