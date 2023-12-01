<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','users');

$username = $_POST['username'];
$txtemail = $_POST['gmail'];
$age = $_POST['age'];
$txtcontact= $_POST['contact'];
$dob = $_POST['DOB'];
$txtpassword = $_POST['password'];

$sql = "INSERT INTO `userdata`(`username`, `txtemail`, `age`, `txtconcat`, `dob`, `txtpassword`) VALUES  ('$username','$txtemail','$age','$txtcontact','$dob','$txtpassword')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Contact Records Inserted";
    header("Location: login.html");
    exit();
}

?>