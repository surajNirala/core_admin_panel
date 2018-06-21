<?php 

require_once("library/Database.php");
	/**
	* database file..
	*/
	class Core extends Database
	{
		
		public function __construct()
	    {
	        parent::__construct();
	    }

		public function getData(){
			$query = "SELECT * FROM products";
			$result = $this->connection->query($query);
			if ($result == false) {
            	return false;
	        } 
	        $rows = array();
	        while ($row = $result->fetch_assoc()) {
	            $rows[] = $row;
	        }
	        
	        return $rows;
		}
	}
 ?>