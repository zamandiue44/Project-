<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students';


@mysql_connect($localhost,$username,$password) or die('Please Cheak your Username or Password'); 
@mysql_select_db($dbname) or die("Can't connect to database");
?>
