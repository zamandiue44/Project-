<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	.phpcoding{width:900px; margin:0 auto; background-color:<?php echo "#ddd;";?>}
	
	.headeroption, .footeroption{background-color:#444; color:#fff; text-align:center; padding:20px;}
	
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
			$filecreate = fopen("new.txt", "w");
			//$filecreate2 = fopen("T-37.01.php", "w");
			
			$one = "Syed Zaman Mostafiz.\n";
			fwrite($filecreate, $one);
			
			$two = "Abdul Razzak.";
			fwrite($filecreate, $two);
			
			echo "Written is complete in file.";
			fclose($filecreate );
			
			?>
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-37.01.php">T-37.01.php</a>
	</div>

	
</body>
</html>