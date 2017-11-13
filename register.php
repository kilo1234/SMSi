<?php
session_start();

if(!empty($_SESSION['search']))
{
	echo "<script>alert('Enter Valid Registration number!!');</script>";
	unset($_SESSION['search']);
}

extract($_REQUEST);
$con = mysqli_connect("localhost","root","","designprob");
if(!$con)
{
die('connection failed'.mysqli_connect_error());
}



$sql = "select * from pawan";
$re= mysqli_query($con,$sql);
if(!mysqli_query($con,$sql))
{
echo "cannot found";
}
else
{
	$rs=mysqli_fetch_array($re);
	$id=$rs['id'];
	$name=$rs['name'];
	$section=$rs['section'];
	$email=$rs['email'];
	$dob=$rs['dob'];
	$dept=$rs['dept'];
	$course=$rs['course'];
}

mysqli_close($con);

?>
<html>
<head>
<title>
</title>
</head>
<body style="text-align:center" width="100%">
<form action=for.php onsubmit="return ser();" method=post>
<table width="100%">
<tr> <td align="center">
<table style="background-color:orange;border-radius:10px;text-align:center;font-size:30" width="60%" height="500px">
	<tr><td style="padding-top:20px" colspan="2"><h2>Enter the details of student: </h2></td>
	</tr>	
	<tr ><td style="padding-bottom:40px">Enter Registration no:</td>
	<td style="padding-bottom:40px"><input type="number" style="width:80%;height:30px;font-size:20px;border-radius:10px;padding-left:10px" placeholder="Enter Registration no." name="search"></td>
	</tr>	
	<tr>
	<td colspan="2" style="padding-top:0px;padding-bottom:20px">
	<input type="submit" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:green" value="Search">
	</td>
	</tr>
	
	<tr>
	<td colspan="2" style="padding-bottom:60px">
	<a href="home.php"><input type="button" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:red" value="Cancel"></a>
	</td>
	</tr>
	</table>
	</td></tr>	

</table>
</form>
<script>
function ser()
{
if(document.getElementsByName('search')[0].value==undefined ||document.getElementsByName('search')[0].value==''){
alert('Search bar cannot be empty!!');
return false;
}

return true;
}

</script>
</body>
</html>