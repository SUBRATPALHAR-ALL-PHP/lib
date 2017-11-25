<?php
require_once "login.php";
 if (isset($_POST['cal']))
  {
	$response = $_POST['cal'];
	$var = explode('%',$response);
	$id = $var[0];
	$pass = $var[1];
	$connection = new mysqli($hn, $un, $pw, $db);
	if ($connection->connect_error) die($connection->connect_error);
	$query="INSERT INTO REPO VALUES('$id',$pass)";
	$result = $connection->query($query);
    	if (!$result) die($connection->error);
	echo"SUCESS FULLY ADDED";

	/*
	if (is_array($var))
		echo 'This is an array....'.print_r($var);
	else
		echo 'This is not an array....';  
	*/

}
?>
