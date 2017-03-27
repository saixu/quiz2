<?php
$firstname= "";
$lastname= "";
$email= "";
$firstname= $_POST["Firstname"];
$lastname= $_POST["Lastname"];
$email= $_POST["Email"];
$visited= "true";
setcookie("firstname", "$firstname", time()+ 600);
setcookie("lastname", "$lastname", time()+ 600);
setcookie("email", "$email", time()+ 600);
setcookie("visited", "$visited", time()+ 600);

?>

<html>
<head>
<title>Get and Post data from welcome.php</title>
</head>
<body>
<?php
	   
       echo "The information you submitted is: <br />";
       while ($curr = each($_POST)): 
            $key = $curr["key"];
            $val = $curr["value"];
            if($key!= "submit")
            echo "$key: $val <br />";
       endwhile;
?>
</body>
</html>
