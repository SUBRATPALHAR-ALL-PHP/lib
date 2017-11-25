<?php
  require_once 'header.php';
  if (isset($_SESSION['user']))
  {
    //Call my destroy function......
    destroySession();
  }
?>
