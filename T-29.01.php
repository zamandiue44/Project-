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
		PHP From Validation
		<hr />
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td>E-mail: </td>
				<td><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website" /></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td>
					<input type="radio" name="gender" value="Female" />Female
					<input type="radio" name="gender" value="Male" />Male
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
			<?php 
			
			?>
			
		</section>
		<section class="footeroption">
			<a href="T-23.01.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
	</div>

	
</body>
</html>