<!DOCTYPE html>
<html>
<head>
	<title>Search Movie</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="container">

		<div class="col-xs-12">
			<h1 class="title">Enter the Title</h1>

			<form method="POST" action="recieve_request.php">
				<input type="text" name="title" class="input_val" /><br/><br/>
				<input type="submit" class="input_but" />
			</form>


			<hr/>
			<div class="">
				Developed by Kiran Patel <br/>
				<a href='https://github.com/kiran94/IMDBSearch'>Github</a>
			</div>

		</div>
	</div>

	
	<script TYPE="text/javascript" src="scripts/jquery.js"></script>
	<script TYPE="text/javascript" src="scripts/bootstrap.min.js"></script>
</body>
</html>