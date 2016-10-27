<?php include 'header.php';?>
		<section class="maincontent">
		<hr />
		PHP Fundamentals Bangla Tutorial Part-34 (File Open/Read/Close)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
		<?php
			$ourfile= fopen("text.txt", "r") or die("File not found!!");
			//echo fread($ourfile,filesize("text.txt"));
			//echo fgetc($ourfile);
			while(!feof($ourfile)){
				//echo fgets($ourfile)."<br />";
				echo fgetc($ourfile)."<br />";
			}
			
			
			
			fclose($ourfile);
			
			
			
		?>		
		</section>
		<section class="footeroption">
	
				<?php require 'date.php';?>

			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-36.01.php">T-36.01.php</a>
	</div>
	
</body>
</html>