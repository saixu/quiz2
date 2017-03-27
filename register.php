<?php
$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$email= $_POST["email"];
setcookie($cookie["firstname"], $firstname, time() + (86400 * 30), "/");
setcookie($cookie["lastname"], $lastname, time() + (86400 * 30), "/");
setcookie($cookie["email"], $email, time() + (86400 * 30), "/");
?>

<html>
<head>
<title>Get and Post data from welcome.php</title>
</head>
<body>
<?php
	   
       echo "POST variables: <br />";
       while ($curr = each($_POST)): 
            $key = $curr["key"];
            $val = $curr["value"];
            echo "$key is $val <br />";
       endwhile;
?>
</body>
</html>
