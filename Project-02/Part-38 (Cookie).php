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
		Part-38 (Cookie)
		<hr />
		
			<?php
			
			
			
			/*if(!isset($_COOKIE['visited'])){
				setcookie("visited", "1", time()+86400, "\n") or die ("Could not set cookie.");
				echo "This is your first visited in this website.";
			} else{
				echo "You are our old visitor.";
			}
			*///setcookie(name, value, expire, path, domain, secure, httponly);
			echo "Cookies is Deleted";
			
			
			
			?>
		
			
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="Part-38 (Cookie).php">Part-37 (Sessions).php</a>
	</div>	
</body>
</html>