<?php
	include ('user1.php');
	$a= new user1();
	$b =$a->read();
	print_r($b);
?>