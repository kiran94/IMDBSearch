<?php
	include "getData.php"; 

	class dataobject
	{
		public $jsonData;
		public $response;  

		function __construct($title)
		{
			ini_set('display_errors',1);
			ini_set('display_startup_errors',1);
			error_reporting(-1);

			$request = new getData(); 

			$title = $request->replaceSpace($title); 
			$output = $request->getDataRequest($title);
			
			$this->jsonData = $request->parseJSON($output); 			
		}

		public function getField($col)
		{
			return $this->jsonData[$col]; 
		}







	}

?>