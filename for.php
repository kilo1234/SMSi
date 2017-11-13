<?php
session_start();
extract($_REQUEST);
$con = mysqli_connect("localhost","root","","designprob");
if(!$con)
{
die('connection failed'.mysqli_connect_error());
}

$sql = 'select * from pawan where id ='.$search;
$re= mysqli_query($con,$sql);
if(mysqli_num_rows($re)<=0)
{
	$_SESSION['search']=1;
	header('Location:register.php');
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
<form action=formaction.php method=post>
<table width="100%">
<tr> <td align="center">
<table style="background-color:orange;border-radius:10px;text-align:center;font-size:25" width="60%" height="100px">
	<tr><td style="padding-top:20px" colspan="2"><h2>Details of student: </h2></td>
	</tr>	
	
	<tr><td>Registration no:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter Registration no." name="ID"><?php echo $id; ?></h3></td>
	</tr>
	
	<tr><td>Name:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter name" name="name"><?php echo $name; ?></h3></td>
	</tr>

	<tr><td>Section:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter Section" name="section"><?php echo $section; ?></h3></td>
	</tr>

	<tr><td>Email:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter Email" name="email"><?php echo $email; ?></h3></td>
	</tr>
	
	<tr><td>Date of Birth:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" name="dob"><?php echo $dob; ?></h3></td>
	</tr>
	
	<tr><td>Department:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter Department" name="dept"><?php echo $dept; ?></h3></td>
	</tr>
	
	<tr><td>Course:</td>
	<td><h3 style="width:80%;height:30px;font-size:25px;padding-top:30px;border-radius:10px;padding-left:10px" placeholder="Enter Course" name="course"><?php echo $course; ?></h3></td>
	</tr>
	
	<tr>
	<td colspan="2" style="padding-bottom:50px">
	<a href="home.php"><input type="button" style="width:50%;height:40px;font-size:20px;border-radius:10px;background-color:green" value="Home"></a>
	</td>
	</tr>
	</table>
	</td></tr>	
</table>
</form>
</body>
</html>