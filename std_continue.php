<?php
if (!empty($_POST['libuser']))
 {
    $username = $_POST['libuser'];
    $password = $_POST['libpass'];
    //fetch data from data base & compare its value... upn sucessful authenticate the user......
    $value = "LIBRARIAN";
    session_start();
    $_SESSION['lib'] = $value;
    die("You are now logged in. Please <a href='std_work.php'>" ."click here</a> to continue.<br><br>");
  }
else
    echo "PLEASE ENTER VALID DETAILS...";
?>
