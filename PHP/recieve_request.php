<?php

	include 'getData.php'; 

	#Set the input 
	$title = $_POST['title']; 
	#$title = "True Grit";
	#Replace spaces. 
	$title = replaceSpace($title);


	#Get the contents. 
	$output = getData($title);
	#Parse into a JSON. 
	$jsonObj = parseJSON($output); 

	#Print Data. 
	echo $jsonObj["Title"]; 


?>