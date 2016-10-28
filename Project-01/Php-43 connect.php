<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'students';

@mysql_connect($host,$username,$pass) or die('Please cheak your username or password');
@mysql_select_db($dbname) or die("Can't conceted database");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<a href="http://localhost/php/">Localhost</a>
<a href="Php-44.index..php">Php-44.index</a>
<a href="Php-45.01.php">Php-45.01</a>
</body>
</html>
