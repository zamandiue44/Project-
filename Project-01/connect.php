<?php
$host = 'localhost';
$username = 'username';
$password = '';
$dbname = 'students';


@mysql_connect($hos,$username,$password) or die('Please Cheak your Username or Password'); 
@mysql_select_db($dbname) or die("Can't connect to database");

?>
