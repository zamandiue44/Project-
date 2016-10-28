<?php
if(isset($_POST['first'])&& ($_POST['2nd']))
{
	echo $_POST['first'];
	echo $_POST['2nd'];
}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<form action="" method="post">
	<p>First Name: <br /> <input type="text" name="first" id="" /></p>
	<p>Last Name: <br /> <input type="text" name="2nd" id="" /></p>
	<input type="submit" value="Submit" />

</form>


<br />
<a href="http://localhost/php/">Localhost</a>
<a href="Php-40.01.php">Php-40.01</a>
</body>
</html>
