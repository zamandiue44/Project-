<?php 
$fonts = "arial";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	.phpcoding{
		width:900px;
		margin:0 auto;
		background-color:<?php echo "#ddd;";?>
		
	}
	.headeroption, .footeroption{
		background-color:#444;
		color:#fff;
		text-align:center;
		padding:20px;
	}
	.headeroption h2, .footeroption h2{
		margin:0;		
	}
	.maincontent{
		min-height:400px;
	}
	
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training"; ?></h2>
		</section>
		<section class="maincontent">		
			<?php 
			echo "I love php <br />";
			echo $fonts;
			//This is single line comment 
			/*This 
			is
			multiline comment*/
			?>
		</section>
		<section class="footeroption">
			<h2><?php echo "This is  Footer content";?></h2>
		</section>
	</div>

	
</body>
</html>