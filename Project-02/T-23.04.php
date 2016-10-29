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
		PHP Arrays
		<hr />

			<?php 
			$cars= array(
				array("BMW", 15, "Nice"),
				array("Volvo", 20, 5),
				array("Saab", 25, 10)
			);
			for($row=0;$row<3;$row++){
				echo "<p>Row Number $row</p>";
				echo "<ul>";
				
				for($col=0;$col<3;$col++){
					echo "<li>".$cars[$row][$col]."</li>";
					
				}
				echo "</ul>";
				
				
			}
			
			
			
			?>
			
		</section>
		<section class="footeroption">
			<a href="T-24.01.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
	</div>

	
</body>
</html>