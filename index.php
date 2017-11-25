<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="script.js"></script>
	<style>
		
		
		<style>
@import url('style.css');</style>
		
		
	<link rel="stylesheet" type="text/css" href="css/style.css">
	#tab1 {
	margin-left: 11%;
	}	
	#tab2 {
	margin-right: 14%;
	}
	#tex {
	margin-left: 30%;
	margin-top: 10%;
    	}
	#srch{
	margin-left: 24%;
	margin-top: 4%;
    	}
	.signup {
	border:1px solid #999999;
	font: normal 14px helvetica;
	color: #444444;
	}
</style>
<title>MY LIBRARY MANAGEMENT SYSTEM</title>
</head>
<body>
<div id='mnhead' style="color:#007acc">LIBRARY MANAGEMENT</div>
<br><br>

<table style="display: inline-block; float: left;" id='tab1' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
<th style="color:red" colspan="2" align="center">LIBRARIAN SECTION....</th>
<form action='lib_continue.php' method='POST'>
<tr><td>ID </td><td><input type="text" name="libuser"></td></tr>
<tr><td>PASSWORD </td><td><input type="text" name="libpass"></td></tr>
<tr><td></td><td><input type="submit" value="LOGIN" class="myButton"></td></tr>
<tr><td><a href='register.php'>CLICK HERE TO REGISTER..</td></tr>
</form>
</table>

<table style="display: inline-block; float: right;" id='tab2' border="0" cellpadding="8" cellspacing="8" bgcolor="#eeeeee">
<th style="color:red" colspan="2" align="center">STUDENT SECTION....</th>
<form action='std_continue.php' method='POST'>
<tr><td>ID </td><td><input type="text" name="libuser"></td></tr>
<tr><td>PASSWORD </td><td><input type="text" name="libpass"></td></tr>
<tr><td></td><td><input type="submit" value="LOGIN" class="myButton"></td></tr>
<tr><td><a href='register.php'>CLICK HERE TO REGISTER..</td></tr>
</form>
</table>

</body>
</html>
