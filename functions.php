<?php
  $connection = new mysqli($hn, $db, $pw, $un);
  if ($connection->connect_error) die($connection->connect_error);

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-9999999, '/');

    session_destroy();
  }

//sanitize user input ..
  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }
?>
