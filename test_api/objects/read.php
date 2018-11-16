<?php 
include_once '../config/database.php';
include_once '../objects/user1.php';

// instantiate database and user object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$user1 = new User($db);

// read products will be here
// query products
$stmt = $product->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){

	//users array
	$users_arr=array();
	$users_arr["records"]=array();

	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		$user1_item = 
	} 

}

 ?>