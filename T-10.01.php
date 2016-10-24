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
		01. Arithmatic Operators
		<hr />
		
			<?php
				$x = 5;
				$y = 2;
				echo "X is = ".$x;
				echo "<br />Y is = ".$y;
				echo "<br />";
				echo "Sum is ";
				echo $x+$y."<br />";
				echo "Sub is ";
				echo $x-$y."<br />";
				echo "Multi is ".$x*$y."<br />";
				echo "Div is ".$x/$y."<br />";
				echo "Modulus is ";
				echo $x%$y."<br />";
			?>
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
	</div>

	
</body>
</html>