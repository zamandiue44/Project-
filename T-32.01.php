<?php 
$fonts = "verdana";
$bgcolor = "#FEAB67";
$fontcolor = "#343F94";

$errname = $erremail = $errwebsite = $errgender = "";
$name = $email = $website = $comment = $gender = "";
			
				if($_SERVER['REQUEST_METHOD']=="POST"){
					
					if(empty($_POST["name"])){
						$errname= "<span style='color:red'>Name is Required.</span>";
					} else{
						$name= Validate($_POST["name"]);
					}
					
					if(empty($_POST["email"])){
						$erremail= "<span style='color:red'>E-mail is Required.</span>";
					} elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
						$erremail= "<span style='color:red'>Invalid E-mail format.</span>";
					} else{
						$email= Validate($_POST["email"]);
					}
					
					
					if(empty($_POST["website"])){
						$errwebsite= "<span style='color:red'>Website is Required.</span>";
					}  elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
						$errwebsite= "<span style='color:red'>Invalid Website format.</span>";
					} else{
						$website= Validate($_POST["website"]);
					}
					
					if(empty($_POST["gender"])){
						$errgender= "<span style='color:red'>Gender is Required.</span>";
					} else{
						$gender= Validate($_POST["gender"]);	
					}
					
					$comment= Validate($_POST["comment"]);
						/*			
						echo "Name: ".$name."<br />";
						echo "E-mail: ".$email."<br />";
						echo "Website: ".$website."<br />";
						echo "Comment: ".$comment."<br />";
						echo "Gender: ".$gender."<br />";
						*/
						}
				function Validate($data){
					$data= trim($data);
					$data= stripcslashes($data);
					$data= htmlspecialchars($data);
					return $data;				
				}
				
				
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
	p{
		margin:0;
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
		PHP Fundamentals Bangla Tutorial Part-31 (Date and Time)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
		<?php
			echo "Today is ".date("d/m/Y")."<br />";
			echo "Today is ".date("d/m/y")."<br />";
			echo "Today is ".date("d.m.y")."<br />";
			echo "Today is ".date("d-m-y")."<br />";
			echo "Today is ".date("l")."<br />";
			echo "Defualt Time is ".date("h:i:sa")."<br />";
			
			echo date_default_timezone_get();
		
			
			
			
		?>		
		</section>
		<section class="footeroption">
		<p>&copy; <?php echo date("Y"); ?> Training With Live Project.</p>
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-33.01.php">T-33.01.php</a>
	</div>

	
</body>
</html>