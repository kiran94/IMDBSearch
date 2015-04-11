<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Search Movie | Kiran's Projects</title>

	<!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

	<!-- container -->
	<div class="container">
		<!-- title -->
		<div class='row'>
			<div class='col-xs-12'>
				<h1 id="title">Enter the Title</h1>
			</div>
		</div>
		<!-- end title -->

		<!-- input -->
		<div class='row'>
			<div class='col-xs-12'>
				
			<form method="POST" action="recieve_request.php">
				<input type="text" name="title" class="input_val" /> <br/><br/>
				<input type="submit" class="input_but" />
			</form>

			</div>
		</div>
		<!-- end input -->

		<hr/>

		<!-- footer -->
		<div class='row'>
			<div class='col-xs-12'>
				Developed by Kiran Patel <br/>
				<a href='https://github.com/kiran94/IMDBSearch'>Github</a>

			</div>
		</div>
		<!-- end footer -->
	</div> <!-- end container -->


	<!-- dev 
	<script TYPE="text/javascript" src="scripts/jquery.min.js"></script>
	<script TYPE="text/javascript" src="scripts/bootstrap.min.js"></script>
	 end dev -->

	<!-- prod -->
	<script type="text/javascript" src="scripts/scripts.min.js"></script>
	<!-- end prod -->
</body>
</html>