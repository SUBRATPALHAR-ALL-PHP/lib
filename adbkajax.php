<?php
require_once "login.php";
//require_once "functions.php";

 if (isset($_POST['cal']))
  {
	$response = $_POST['cal'];
	$var = explode('%',$response);
	
	$isbn = $var[0];
	$isbntrim = trim($isbn);
	
	$title = $var[1];
	$title = trim($title);
	$titlechk = $title != '' ? $title : "NOT AVAILABLE(N/A)";
	
	$author = $var[2];
	$author = trim($author);
	$authorchk = $author != '' ? $author : "NOT AVAILABLE(N/A)";

	$no = $var[3];
	$no = trim($no);
	$nochk = $no != '' ? $no : 1;
	
	if (!empty($isbntrim)){
		//isbn should be unique..
		$connection = new mysqli($hn, $un, $pw, $db);
		if ($connection->connect_error) die($connection->connect_error);
		$query="SELECT DISTINCT id,no FROM bookrepo WHERE isbn='$isbntrim'";
		$result = $connection->query($query);
		if($result->num_rows){
			//UPDATE..   Increase the book number....
			//$id = result#id
			//$no = result#no
			//$rows = $result->num_rows;
			for($j=0;$j<1;++$j){
				$result->data_seek($j);
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$x = $row['id'];
				$y = $row['no'];
				$qr = "UPDATE bookrepo SET no = $y+$nochk WHERE id = $x";
				$result = $connection->query($qr);
			}
			$result -> close();
			$connection -> close();
		}				
		else
		{
		$query="INSERT INTO bookrepo VALUES(NULL,'$isbntrim', '$titlechk', '$authorchk', $nochk)";	
		$result = $connection->query($query);
			if ($result)
				echo"SUCESS FULLY ADDED...";
			else
				echo "OOPS!!! Something went wrong..."."  "."PLEASE TRY AGAIN..!!"."\n"."\n"."\n"."ERROR MESSAGE WE GOT IS.."."\n"."\n"."$connection->error";
		
		$result -> close();
		$connection -> close();
		}
		}
	else
		echo "OO Oh OOPS"."." ." "." . " ." ".".!!!"."\n"."\n"."ISBN CAN NOT BE EMPTY....?";
  }
	/*
	if (is_array($var))
		echo 'This is an array....'.print_r($var);
	else
		echo 'This is not an array....';  
	*/
?>
