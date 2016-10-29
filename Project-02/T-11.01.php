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
		01. Arithmatic Operators
		02. Assignment Operators
		03. Comparison Operators
		04. Increment/ Decrement Operators
		05. Logical Operators
		06. String Operators
		07. Array Operators
		<hr />
		02. Assignment Operators <br />
		Example:
		=
		+=
		-=
		*=
		/=
		%=
		
		
		
		<hr />
		
			<?php
				$x = 10;
				echo "Now x is ".$x." (for = )<br />";
				$x +=20;
				echo "Now x is ".$x." (for +=)<br />";
				$x -= 10;
				echo "Now x is ".$x." (for -= )<br />";
				$x *= 10;
				echo "Now x is ".$x." (for *= )<br />";
				$x /= 10;
				echo "Now x is ".$x." (for /= )<br />";
				$x %= 10;
				echo "Now x is ".$x." (for %= )<br />";				
			?>
		</section>
		<section class="footeroption">
			<a href="T-12.01.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
		<a href="T-12.01.php">T-12.01.php</a>
	</div>

	
</body>
</html>