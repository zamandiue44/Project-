<?php
$fonts= "verdana";
$bgcolor= "#444";
$fontcolor= "yellow";
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	body{font-family:<?php echo $fonts?>}
	.phpcoding{width:900px; margin:0 auto; background-color:<?php echo "#ddd;";?>}
	
	.headeroption, .footeroption{background-color:<?php echo $bgcolor?>; color:<?php echo $fontcolor?>; text-align:center; padding:20px;}
	
	.headeroption h2, .footeroption h2{margin:0;}
	
	.maincontent{min-height:400px; padding:20px;}
	
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training"; ?></h2>
		</section>
		<section class="maincontent">		
			<?php 
			$a=5;
			$b=10;
			$c=$a+$b;
			echo $fonts."<br />";
			echo $a."<br />";
			echo "Total Value ($a+$b)= ".$c." OK Fine";
			//This is Single Line Comment
			/*This 
			is 
			Multi 
			Line 
			Comment*/
			
			?>
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-06.01.php">T-06.01.php</a>
	</div>

	
</body>
</html>