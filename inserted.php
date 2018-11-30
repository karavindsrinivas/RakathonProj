<?php

$conn=mysqli_connect('127.0.0.1','root','');
if (!$conn)
{
    die('Connection failed!' . mysqli_error());
}

$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$db_select=mysqli_select_db($conn,"wpproject");
if(!$db_select)
	die('Cannot use databse test');

$query="INSERT into registrations(fname,uname,email,dob,password) values('$fname','$uname','$email','$dob','$password')";
if(mysqli_query($conn,$query))
{
  	header("Location: LoginPage.html");
}

else
{
	echo "ERROR";
  header("Location: RegisterPage.html");
}
mysqli_close($conn);

?>
