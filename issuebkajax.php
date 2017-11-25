<?php
require_once "login.php";
//require_once "functions.php";

 if (!empty($_POST['cal']))
  {
	$response = $_POST['cal'];
	$var = explode('%',$response);
	
	$stdid = $var[0];
	$stdidtrim = trim($stdid);
	
	$bkid = $var[1];
	$bkidtrim = trim($bkid);
	
	if (!empty($stdidtrim))
	{
		$connection = new mysqli($hn, $un, $pw, $db);
		if ($connection->connect_error) die($connection->connect_error);
		$query="INSERT INTO issuereturninfo (sid,bookid,frmdate,notify) VALUES($stdidtrim, '$bkidtrim', NOW(), NOW()+INTERVAL 11 DAY)";
		$result = $connection->query($query);
		if(!$result) 
			echo "SOMETHING WENT WRONG PLEASE TRY AGAIN..";
		else
			echo "ISSUED .. THANK YOU...!!!";
	}
	
	
	  else
		echo 'EITHOR STUDENT ID OR BOOK ID CAN NOT BE LEFT EMPTY'.PHP_EOL;
  }
?>
