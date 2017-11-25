<?php
/*
if user name and password is correct i want to set up a session with a value	LIBRARIAN    OR   STUDENT
AND then use the        SWITCH.......   CASE..........
BEACUSE FIRST TIME I WILL START A SESSION     &&&&&     SESSION SETs UP A COOKIE THAT RELATE ONLY TO THE CURRENT USER HAS MEANING  ONLY TO THE WEB SERVER
I WILL USE THIS FILE AS       CONTINUE.PHP       SO THAT SESSION WILL STORE A COOKIE TO THE CURRENT USERS BROWSER     AND THEN  LATER
I WILL USE IT IN THE    LIBRARIAN .PHP    TO AUTHENTICATE IT.........................
*/
//if (isset($_POST['libuser']) && isset($_POST['libpass']))

if (!empty($_POST['libuser']))
  {
	  
    $username = $_POST['libuser'];
    $password = $_POST['libpass'];
	$value = "LIBRARIAN";
	session_start();
	$_SESSION['lib'] = $value;
	//echo "$username","$password";
	die("You are now logged in. Please <a href='librarian_work.php'>" ."click here</a> to continue.<br><br>");
  }
else
echo "PLEASE ENTER VALID DETAILS...";
?>
