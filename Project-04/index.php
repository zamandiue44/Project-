<?php
include_once('connect.php');
if(isset($_POST['submit'])){
	$name= $_POST['name'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$admission= $_POST['admission'];
	@msql_query("INSERT INTO students_record(name, email, address, joining_date) VALUES('$name', '$email', '$address', '$admission')");
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<p>Name: <br /> <input type="text" name="name" id="" /></p>
		<p>Email: <br /> <input type="text" name="email" id="" /></p>
		<p>Address: <br /> <input type="text" name="address" id="" /></p>
		<p>Admission: <br /> <input type="text" name="admission" id="" /></p>
		<p><input type="submit" value="Submit" name="submit" /></p>
		
	</form>
	phpinfo();
</body>
</html>