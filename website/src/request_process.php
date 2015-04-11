<?php

	include 'getData.php'; 

	#Set the input 
	$title = $_POST['title']; 
	
	#Replace spaces. 
	$title = replaceSpace($title);

	#Get the contents. 
	$output = getData($title);
	#Parse into a JSON. 
	$jsonObj = parseJSON($output); 


	echo "<div class='container'>"; 
		if($jsonObj["Response"] == "False")
		{
			echo "<div class='container'>"; 
			echo '<div class="alert alert-warning" role="alert">';
		  	echo '<a href="#" class="alert-link">Could not find title!</a>';
			echo '</div>';
			echo "</div>"; 
			
			include "index.php"; 
			exit();
		}


		echo "<div class='row'>"; 
				echo "<div class='col-xs-12'>";
					echo "<h1 class='title'>" . $jsonObj["Title"] . "</h1>"; 
				echo "</div>"; 
		echo "</div>"; 

		#Print Data. 
		echo "<div class='row'>";

			echo "<div class='col-xs-7'>";
				echo "Released: " . $jsonObj["Released"] . "<br/>"; 
				echo "Run Time: " . $jsonObj["Runtime"] . "<br/>"; 
				echo "Genre: " . $jsonObj["Genre"] . "<br/>"; 
				echo "Starring: " . $jsonObj["Actors"] . "<br/>"; 

				echo "<br/>";
				echo "<br/>";
				echo "Director: " . $jsonObj["Director"] . "<br/>"; 
				echo "Writers: " . $jsonObj["Writer"] . "<br/>"; 

				echo "<br/>";
				echo "<br/>";

				echo "<div class='plot'>" . $jsonObj["Plot"] . "</div><br/>"; 

				echo "<br/>";
				echo "<br/>";

				echo "<a href='http://www.imdb.com/title/" . $jsonObj['imdbID'] . "'>More Information</a><br/>"; 
				echo "<a href='index.php'>Back</a>"; 
			echo "</div>";


			echo "<div class='col-xs-5 hidden-xs'>";
				echo "<img src=" . $jsonObj["Poster"] .  " alt='poster'  />"; 
			echo "</div>";
		echo "</div>"; 

	echo "</div>"; 
?>