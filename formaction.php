<?php
session_start();
$con = mysqli_connect("localhost","root","","designprob");
if(!$con)
{
die('connection failed'.mysqli_connect_error());
}

$sql = "insert into pawan values(".$_POST['ID'].",'".$_POST['name']."','".$_POST['section']."','".$_POST['email']."','".$_POST['dob']."','".$_POST['dept']."','".$_POST['course']."')";

if(!mysqli_query($con,$sql))
{
$_SESSION['notsuccess']=1;
header('Location:form.php');
}
else
{
$_SESSION['success']=1;
header('Location:home.php');
}

mysqli_close($con);

?>