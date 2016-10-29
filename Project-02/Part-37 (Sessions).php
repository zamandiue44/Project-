<?php 
session_start();
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
		Part-37 (Sessions)
		<hr />
		
			<?php 
			
				$_SESSION['user']= "Syed Zaman Mostafiz";
				$_SESSION['password']="123";
				echo "Username is ".$_SESSION['user']."<br />";
				echo "Password is ".$_SESSION['password']."<br />";
				
			?>
		
			
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="Part-38 (Cookie).php">Part-37 (Sessions).php</a>
	</div>	
</body>
</html>