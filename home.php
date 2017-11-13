
<?php
session_start();
if(!empty($_SESSION['success']))
{
echo ("<script>alert('Data Registered');</script>");
unset($_SESSION['success']);
}


?>
<html>
<head>
<title>
</title>
</head>
<body style="text-align:center" width="100%">
<table width="100%">
<tr> <td align="center">
<table style="background-color:orange;border-radius:10px;text-align:center;font-size:30" width="60%" height="500px">
	<tr><td style="padding-top:20px" colspan="2"><h2>Student Details Management System </h2></td>
	
	<tr> 
	<td colspan="2" style="padding-bottom:0px">
	<a href="form.php"><input type="submit" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:green" value="Register"></a>
	<td>
	</tr>
	
	<tr>
	<td colspan="2" style="padding-bottom:20px">
	<a href="register.php"><input type="submit" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:green" value="Details"></a>
	<td>
	</tr>

</td></tr>		
</table>
</table>
</body>
</html>