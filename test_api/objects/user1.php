<?php 
class user1{

 	private $host = "localhost";
    private $db_name = "test";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    
    function index(){
    	echo "string";
    }
	// read users
	function read(){
		$mysqli = new mysqli("localhost", "root", "", "test");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		$a="aa@g.com";
		$b="1234";
		$testarray=array();
		$query = "SELECT first_name FROM  users where email='$a' and pass_word=$b";
		//$stmt = $mysqli->prepare($query);
		$result = $mysqli->query($query);
		if ($result->fetch_row()>0) {
			# code...
			$c='success';
		}else{
			$c='Fail';
		}
		//echo $c;
		$d=array(
			'email'=>$a
			,'pass_word'=>$b
			,'message'=>$c
		);
		array_push($testarray,$d);
		echo json_encode($testarray);

	}

}