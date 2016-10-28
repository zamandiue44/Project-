<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Learning</title>
</head>
	<?php
	$username = "syedzaman125@yahoo.com";
	$entered = strtolower("Syedzaman125@yahoo.com");
	if($username==$entered)
	{
		echo "Welcome";
	}
	else 
	{
		echo "Can't Enter this page";
	}
	?>

<br />
<a href="http://localhost/php/">Localhost</a>
<a href="Php-31.01.php">Php-31.01</a>
</body>
</html>

