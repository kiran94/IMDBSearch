<?php
	//Import the data object. 
	require_once 'dataobject.php'; 

	//Set the input 
	$title = $_POST['title']; 
	//Inititate the dataobject and pass the the title of the movie. 
	$data = new dataobject($title); 

	//Error Case. 
	if($data->getField("Response") == "False")
	{	
			//Display Error. 
			echo "<div class='container'>"; 
				echo '<div class="alert alert-warning" role="alert">';
			  		echo '<a href="#" class="alert-link">Could not find title!</a>';
				echo '</div>';
			echo "</div>"; 
				
			//Return Home page.
			include "index.php";
			//Stop processing.  
			exit();
	}

	//Success Case
	echo "<div class='container'>"; 

		//Display Title
		echo "<div class='row'>"; 
				echo "<div class='col-xs-12'>";
					echo "<h1 class='title'>" . $data->getField("Title") . "</h1>"; 
				echo "</div>"; 
		echo "</div>"; 

		// Display Data
		echo "<div class='row'>";

			//Array of values to display. 
			$keys = array("Released", "Runtime", "Genre", "Actors", "Director", "Writer", "Plot"); 
			//Variable to determine when to enter a <br/> tag, 
			$breaks = 5; 

			//Data columns. 
			echo "<div class='col-xs-7'>";
				//For each key..
				for($currentKey=0; $currentKey<sizeof($keys); $currentKey++)
				{
					//If the currnet key is a plot.. 
					if($keys[$currentKey] == "Plot")
					{	
						//Print plot without key. 
						echo "<div class='plot'>" . $data->getField("Plot") . "</div><br/>"; 
					}
					else
					{	
						//Print key in header
						echo "<h4>" . $keys[$currentKey] ."</h4>"; 
						//Print data in paragraph. 
						echo "<p>" . $data->getField($keys[$currentKey]) ."</p>";
					}

					//Break if it is needed in current iteration. 
					if($currentKey == $breaks) { echo "<br/><br/>"; }
				}

				//Print url. 
				echo "<a href='http://www.imdb.com/title/" . $data->getField("imdbID") . "'>More Information</a><br/>"; 
				//Print index link. 
				echo "<a href='index.php'>Back</a>"; 
			//End row. 
			echo "</div>";

		//Image Column. 
		echo "<div class='col-sm-5 hidden-xs'>";
			echo "<img src=" . $data->getField("Poster") . " alt='poster' />"; 
		echo "</div>";
	
	//End Container. 
	echo "</div>"; 
?>