<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Search Movie | Kiran's Projects</title>

	<!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- end meta -->
	
	<!-- dev -->
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<!-- end dev -->

	<!-- prod 
	<link rel="stylesheet" type="text/css" href="style/style.min.css" />
	end prod -->
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

				<input type="text" name="title" id="input_val" /> <br/><br/>
				<a href="#" class="btn form-control btn-default" id="input_but">Submit</a>

			</div>
		</div>
		<!-- end input -->

		<hr/>

		<!-- input -->
		<div class='row'>
			<div class='col-xs-12'>

				<div id="result">

					<img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_red_512.gif" id="loading" width="200" height="200" class="poster"/>

					<h3 id="title_results"></h3>

					<p id="contents"></p>

				

					<img src="" alt="poster" class="img-responsive poster" id="posterpic"/>

					<hr/>
				</div>
			</div>
		</div>
		<!-- end input -->

		

		<!-- footer -->
		<div class='row'>
			<div class='col-xs-12'>
				Developed by Kiran Patel <br/>
				<a href='https://github.com/kiran94/IMDBSearch'>Github</a><br/>
				<a href="http://www.omdbapi.com/">API By Brain Fritz</a>
			</div>
		</div>
		<!-- end footer -->
	</div> <!-- end container -->


	<!-- scripts -->
	<script TYPE="text/javascript" src="scripts/jquery.min.js"></script>
	<script TYPE="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/requestData.js"></script>
	<!-- end scripts -->
</body>
</html>