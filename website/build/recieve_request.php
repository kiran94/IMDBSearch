<!DOCTYPE html>
<html>
<head>
	<title>Movie Details</title>
	<!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- end meta -->

	<!-- dev
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	end dev -->

	<!-- prod  -->
	<link rel="stylesheet" type="text/css" href="style/style.min.css" />
	<!-- end prod -->
</head>
<body>
		<?php
			if(!isset($_POST['title']))
			{
				header('Location: index.php');
			}
			include 'request_process.php'; 
		?>
</body>
</html>