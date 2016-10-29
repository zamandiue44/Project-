<?php 
$fonts = "verdana";
$bgcolor = "#FEAB67";
$fontcolor = "#343F94";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	body{
		font-family:<?php echo $fonts; ?>
	}
	.phpcoding{
		width:900px;
		margin:0 auto;
		background-color:<?php echo "#ddd;";?>
		
	}
	.headeroption, .footeroption{
		background-color: <?php echo $bgcolor; ?>;
		color:<?php echo "$fontcolor";?>;
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
		<hr />
		PHP SuperGolbals[$GLOBALS & $_SERVER].
		<hr />
		<pre>
		$GLOBALS	$_SERVER	
		$_REQUEST	$_POST	
		$_GET		$_FILE	
		$_ENV		$_COOKIE	
		$_SESSION
		</pre>
		$_SERVER
		<hr />
		
			<?php
			echo $_SERVER['SERVER_ADDR'];
				
			?>
			<br />
			
		</section>
		<section class="footeroption">
			<a href="T-27.01.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
	</div>

	
</body>
</html>