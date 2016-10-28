<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Learning</title>
</head>
	<?php
	$students = array('Sharif'=>array('age'=>24, 'Mark'=>89, 'class'=>'ten'), 
					  'Shamim'=>array('age'=>23, 'Mark'=>70, 'class'=>'nine')
	);
	//print_r($students);
	
	echo $students['Sharif']['age'];
	
	?>

<br />
<a href="http://localhost/php/">Localhost</a>
<a href="Php-23.01.php">Php-23.01</a>
</body>
</html>

