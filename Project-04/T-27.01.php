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
		PHP Superglobals[$_REQUEST & $_POST].
		<hr />
			<form action="" method="post">
		<p>Name: <br /> <input type="text" name="name" id="" /></p>
		<p>Email: <br /> <input type="text" name="email" id="" /></p>
		<p>Address: <br /> <input type="text" name="address" id="" /></p>
		<p>Admission: <br /> <input type="text" name="admission" id="" /></p>
		<p><input type="submit" value="Submit" /></p>
		
	</form>
			<?php 
			include_once('connect.php');
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$name= $_REQUEST['name'];
				$email= $_REQUEST['email'];
				$address= $_REQUEST['address'];
				$admission= $_REQUEST['admission'];
				if(empty($name)){
						echo "<span style='color:red'>Username field must not be empty !!</span>";
				} else{
					$name= $_POST['name'];
					$email= $_POST['email'];
					$address= $_POST['address'];
					$admission= $_POST['admission'];
					msql_query("INSERT INTO students_record(name, email, address, joining_date) VALUES('$name', '$email', '$address', '$admission')");
				}
				
				
			}
				
			?>
			
		</section>
		<section class="footeroption">
			<a href="T-27.02.php"><h2><?php echo "Zaman Web Education";?></h2></a>
		</section>
	</div>

	
</body>
</html>