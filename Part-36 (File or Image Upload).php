<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Syntax</title>
	<style>
	.phpcoding{width:900px; margin:0 auto; background-color:<?php echo "#ddd;";?>}
	
	.headeroption, .footeroption{background-color:#444; color:#fff; text-align:center; padding:20px;}
	
	.headeroption h2, .footeroption h2{margin:0;}
	
	.maincontent{min-height:400px; padding:20px;}
	
	</style>
</head>
<body>
	<div class="phpcoding">
		<section class="headeroption">
			<h2><?php echo "PHP Fundamental Training"; ?></h2>
		</section>
		<section class="maincontent">		
		<hr />
		PHP Fundamentals Bangla Tutorial Part-36 (File/Image Upload)
		<hr />
		
			<?php 
			if(isset($_FILES['image'])){
				$filename= $_FILES['image']['name'];
				$filetmp= $_FILES['image']['tmp_name'];
				move_uploaded_file($filetmp,"images/".$filename);
				echo "Image Uploaded Successfully";
				
			}
			?>
			<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="image" />
			<input type="submit" value="Submit" />
			</form>
		</section>
		<section class="footeroption">
			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="Part-37 (Sessions).php">Part-37 (Sessions).php</a>
	</div>	
</body>
</html>