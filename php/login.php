<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!--<link rel="stylesheet" type="text/css" href="../css/login.css">-->
</head>
<body>
	<?php 
		if(empty($_GET['username'])==false)
		{
			echo "Welcome".$_GET['username'];
		}

		else
		{
			echo "wrong username or password..."
		}


	?>
</body>
</html>
