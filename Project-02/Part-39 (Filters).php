<?php 
session_start();
setcookie("visited", "1", time()-3600, "\n")


?><!DOCTYPE HTML>
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
		Part-39 (Filters)
		<hr />
		
			<?php
			$str= "<h2>I am Learning PHP.</h2>";
			$newstr= filter_var($str, FILTER_SANITIZE_STRING);
			echo $newstr;
			echo "<br />";
			?>
			<?php 
			$int =50.6;
			if(filter_var($int, FILTER_VALIDATE_INT)){
				echo "It is Interger Value";
			} else{
				echo "It is not Interger Value.";
			}
			?>
			
			
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="Part-39 (Filters).php">Part-39 (Filters)</a>
	</div>	
</body>
</html>