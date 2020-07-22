<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name == ""){ echo "name is required";}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>

	<form method="post">
		Name: <input type="text" name="sname" value="" placeholder=""><?php if(!isset($name)){echo "Cannot be empty";}?>
		
		<input type="submit" name=""
		 value="Submit">
	</form>
</body>
</html>