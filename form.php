<?php
session_start();
if(!empty($_SESSION['notsuccess']))
{
echo ("<script>alert('Data fields cannot be empty');</script>");
unset($_SESSION['notsuccess']);
}
?>


<html>
<head>
<title>
</title>
</head>
<body style="text-align:center" width="100%">
<form action=formaction.php method=post>
<table width="100%">
<tr> <td align="center">
<table style="background-color:orange;border-radius:10px;text-align:center;font-size:30" width="60%" height="570px">
	<tr><td style="padding-top:20px" colspan="2"><h2>Enter the details of student: </h2></td>
	</tr>	
	
	<tr><td>Enter Registration no:</td>
	<td><input type="number" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Registration no." name="ID"></td>
	</tr>
	
	<tr><td>Enter Name:</td>
	<td><input type="text" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter name" name="name"></td>
	</tr>

	<tr><td>Enter Section:</td>
	<td><input type="text" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Section" name="section"></td>
	</tr>

	<tr><td>Enter Email:</td>
	<td><input type="email" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Email" name="email"></td>
	</tr>
	
	<tr><td>Enter Date of Birth:</td>
	<td><input type="date" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" name="dob"></td>
	</tr>
	
	<tr><td>Enter Department:</td>
	<td><input type="text" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Department" name="dept"></td>
	</tr>
	
	<tr><td>Enter Course:</td>
	<td><input type="text" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Course" name="course"></td>
	</tr>
	
	
	
	
	
	<tr>
	<td colspan="2" style="padding-top:20px;padding-bottom:20px">
	<input type="submit" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:green" value="Submit">
	<td>
	</tr>
	
	<tr>
	<td colspan="2" style="padding-bottom:20px">
	<a href="home.php"><input type="button" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:red" value="Cancel"></a>
	<td>
	</tr>

</td></tr>		
</table>
</table>
</form>
</body>
</html>