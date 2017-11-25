<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="script.js"></script>
<style><link rel="stylesheet" type="text/css" href="css/style.css"></style>
<title>MY LIBRARY MANAGEMENT SYSTEM</title>
</head>
<body>
<?php
session_start();
$compare = $_SESSION['lib'];

switch ($compare) {
	case "STUDENT":
		//STUDENT CODE GOES HERE....
	break;
	
	case "LIBRARIAN":
	echo <<<_END
		<div id='mnhead' style="color:#007acc">LIBRARY MANAGEMENT</div>
		<br><br>
		
		<table style="display: inline-block; float: left;" id='tab2' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
			<th style="color:red" colspan="2" align="center">ADD A BOOK</th>
			<form onsubmit="adbk(this)">
				<tr><td>ISBN </td><td><input type="text" name='isbn' autofocus='ON'></td></tr>
				<tr><td>TITLE </td><td><input type="text" name='title'></td></tr>
				<tr><td>AUTHOR </td><td><input type="text" name='author'></td></tr>
				<tr><td>NO </td><td><input type='number' name='no' value='1'></td></tr>
				<tr>
					<tr><td></td></tr>
					<th colspan="2" align="center"><input type="submit" value="ADD" class="myButton"></th>
				</tr>
			</form>
		</table>

		<table style="display: inline-block; float: left;" id='tab2' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
			<th style="color:red" colspan="2" align="center">ISSUE A BOOK</th>
			<form onsubmit="issuebk(this)">
				<tr><td></td><td></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td>STUDENT ID </td><td><input type="text" name="stdid"></td></tr>
				<tr><td></td><td></td></tr>
				<tr><td>BOOK ID </td><td><input type="text" name="bkid"></td></tr>
				<tr><td></td><td></td></tr>
				<tr>
					<td></td>
					<th colspan="2" align="center"><input type="submit" value="ISSUE" class="myButton"></th>
				</tr>
			</form>
		</table>

		<table style="display: inline-block; float: left;" id='tab3' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
			<th style="color:red" colspan="2" align="center">RETURN A BOOK</th>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
			<form onsubmit="validate(this)">
			<tr><td>STUDENT ID </td><td><input type="text" name="idtest"></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td><th colspan="1" align="center"><input type="submit" value="CHECK" class="myButton"></td></th></tr>
			</form>
		</table>
_END;
break;
}
?>
</body>
</html>
