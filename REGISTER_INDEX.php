<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="script.js"></script>
	<style>

@import url('style.css');
	</style>
	<title>MY LIBRARY MANAGEMENT SYSTEM</title>
</head>

<?php
if (!empty($_POST['libid']))
{
	//SUBMIT THE DATA.................
	echo "WORKING";
}
	
echo <<<_ENND
<body>
<div id='mnhead' style="color:#007acc">LIBRARY MANAGEMENT</div>
<br><br>

<table style="display: inline-block; float: left;" id='tab1' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
<th style="color:red" colspan="2" align="center">PLEASE REGISTER..</th>
<form  method="POST" action="REGISTER_INDEX.php">
<tr><td>ID </td><td><input type='text' name='libid'></td></tr>
<tr><td>PASSWORD </td><td><input type='text' name='libpass'></td></tr>
<th colspan="2" align="center"><input type="submit" value="REGISTER" class="myButton"></th>
</form>
</table>

</body>
</html>
_ENND;
	
?>
