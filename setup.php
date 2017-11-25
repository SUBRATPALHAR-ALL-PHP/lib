<!DOCTYPE html>
<html>
  <head>
  <title>Setting up database</title>
  </head>
  <body>
  <h3>Setting up...</h3>
<?php
  require_once 'functions.php';

  createTable('BOOKREPO', 
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              isbn VARCHAR(30) NOT NULL UNIQUE,
              title VARCHAR(40),
	      author VARCHAR(40),
	      no INT(10),
              INDEX(isbn(15)),
              INDEX(title(10))');

   createTable('STDINFO', 
              'stdid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              username VARCHAR(30),
              password VARCHAR(40),
	      nobook INT(2),
              INDEX(username(10))');

   createTable('LIBINFO', 
              'lid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              username VARCHAR(30),
              password VARCHAR(40),
              INDEX(username(10))');
	  
	createTable('ISSUERETURNINFO', 
              'sid INT UNSIGNED NOT NULL,
              bookid VARCHAR(30),
              frmdate DATE,
	      todate DATE,
	      notify DATE,
	      fine INT');
?>
<br>...done.
</body>
</html>
