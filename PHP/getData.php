<?php

	function getData($title)
	{
		$url = "http://www.omdbapi.com/?t=" . $title;
		$output = file_get_contents($url);
		return $output;

	}

	function parseJSON($output)
	{
		$jsonObj = json_decode($output, true); 
		return $jsonObj; 
	}

	function replaceSpace($title)
	{
		return str_replace(" ", "%20", $title); 
	}

?>