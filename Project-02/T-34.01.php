<?php include 'header.php';?>
		<section class="maincontent">
		<hr />
		PHP Fundamentals Bangla Tutorial Part-32 (Include & Require)
		<span style="float:right">
		<?php
			date_default_timezone_set('Asia/Dhaka');
			echo "Bangladesh Time is ".date("h:i:sa")."<br />";
		?>
		</span>
		<hr />
		
		<?php
			readfile('text.txt');
			echo "<br />";
			echo readfile('text.txt');
			
			
			
		?>		
		</section>
		<section class="footeroption">
				<?php require 'date.php';?>

			<h2><?php echo "Zaman Web Education";?></h2>
		</section>
		<a href="T-35.01.php">T-35.01.php</a>
	</div>
		
		

	
</body>
</html>