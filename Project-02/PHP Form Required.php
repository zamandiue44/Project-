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
					} else{
						$email= Validate($_POST["email"]);
					}
					
					if(empty($_POST["website"])){
						$errwebsite= "<span style='color:red'>Website is Required.</span>";
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
	
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training"; ?></h2>
		</section>
		<section class="maincontent">
		<hr />
		PHP Form Required
		<hr />
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		<table>
		<p style="color:yellow">* Required</p>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" />*<?php echo $errname ?></td>
			</tr>
			<tr>
				<td>E-mail: </td>
				<td><input type="email" name="email"  />*<?php echo $erremail ?></td>
			</tr>
			<tr>
				<td>Website: </td>
				<td><input type="text" name="website"  />*<?php echo $errwebsite ?></td>
			</tr>
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" id="" cols="30" rows="10" ></textarea></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td>
					<input type="radio" name="gender" value="Female"/>Female
					<input type="radio" name="gender" value="Male"  />Male
					*<?php echo $errgender ?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
		</form>
			
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-31.01.php">T-31.01.php</a>
	</div>

	
</body>
</html>