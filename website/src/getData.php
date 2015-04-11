<?php

	class getData
	{
		public function getDataRequest($title)
		{
			$url = "http://www.omdbapi.com/?t=" . $title;
			$output = file_get_contents($url);
			return $output;
		}

		public function parseJSON($output)
		{
			$jsonObj = json_decode($output, true); 
			return $jsonObj; 
		}

		public function replaceSpace($title)
		{
			return str_replace(" ", "%20", $title); 
		}
	}	
?>