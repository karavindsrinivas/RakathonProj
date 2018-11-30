<?php

$conn=mysqli_connect('127.0.0.1','root','');
if (!$conn)
{
    die('Connection failed!' . mysqli_error());
}
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$db_select=mysqli_select_db($conn,"test2");

if(!$db_select)
	die('Cannot use databse test');

$query="INSERT into logins (uname,password) values('$uname','$password')";
if(mysqli_query($conn,$query))
	echo "THE DATA HAS BEEN INSERTED SUCCESSFULLY!";
else
	echo "THE DATA CANNOT BE INSERTED";
mysqli_close($conn);

?>
