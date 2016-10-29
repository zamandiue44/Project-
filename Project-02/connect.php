<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students';


@mysql_connect($localhost,$username,$password) or die('Please Cheak your Username or Password'); 
@mysql_select_db($dbname) or die("Can't connect to database");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>
