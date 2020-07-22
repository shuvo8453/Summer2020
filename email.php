<?php
function Email()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sEmail = $_POST['Email'];

		if($sEmail == "")
		{
			echo "Email is required";
		}
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Email Form</title>
</head>
<body>

	<form method="post">
		Email: <input type="text" Email="sname" value="" placeholder=""><?php if(!isset($Email))?>
		
		<input type="submit" Email=""
		 value="Submit">
	</form>
</body>
</html>