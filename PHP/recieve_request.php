<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>


	<!-- <div class="container"> -->

		<?php
			if(!isset($_POST['title']))
			{
				header('Location: index.php');

			}


			include 'request_process.php'; 
		?>

	<!-- </div> -->

</body>
</html>