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
		While loops
		<br />
			<?php
				$x=1;
				while($x<=5){
					echo "The Number is: $x <br />";
					$x++;
					
				}
			?>
			<br />
			<?php
				$a=7;
				do{
					echo "The number is: $a <br />";
					$x++;
				} while($a<=5);
			?>
		</section>
		<section class="footeroption">
			<a href="T-20.01.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
	</div>

	
</body>
</html>