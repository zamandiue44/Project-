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
		<hr />
		PHP Fundamentals Bangla Tutorial Part-35 (File Create & Write)
		<hr />
		
			<?php 
			$filecreate = fopen("01. text.txt", "w") or die("File not Found.");
			$one= " Syed Zaman Mostafiz.\n";
			fwrite($filecreate, $one);
			$two= " Syed Zaman Mostafiz.\n";
			fwrite($filecreate, $two);
			echo "File is Create and Written and Close";
			fclose($filecreate);
			
			
			?>
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="Part-36 (File or Image Upload).php">Part-36 (File/Image Upload)</a>
	</div>	
</body>
</html>