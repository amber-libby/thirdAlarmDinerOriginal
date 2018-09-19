<?php
	class DB{

		//connection object
		private $connection;

		//Default constructor
		function __construct(){
			require_once("../../../DBinfo_tad.php");
			$this->connection = new mysqli($host, $user, $pass, $db);
			if($this->connection->connect_error){
				echo "Connection failed".mysqli_connect_error();
				die();
			}	
		}//end of default constructor


		//retrieve all items from the daatabase in an array format
		function getAllItems(){
			$data = Array();
			if($stmt = $this->connection->prepare("select name, description, price, image, item_id from menu_item;")){
				 $stmt->execute();//run the query
				 $stmt->store_result();
				 $stmt->bind_result($name, $description, $price, $image, $item_id);
				 if($stmt->num_rows > 0){
				 	while($stmt->fetch()){
				 		$data[] = array(
				 			'item_id'=>$item_id,
				 			'name'=>$name,
				 			'description'=>$description,
				 			'price'=>$price,
				 			'image'=>$image
				 		);
				 	}
				 }
			}
			return $data;
		}//end of getAllItems








	}//end of class DB
?>