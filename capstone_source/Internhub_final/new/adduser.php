<?php
require_once("db.php");

$first_name=mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name=mysqli_real_escape_string($conn, $_POST['last_name']);
$org_name=mysqli_real_escape_string($conn, $_POST['org_name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

$user_query="insert into users(first_name,last_name,org_name,email,password) values('$first_name','$last_name','$org_name','$email','$password')";


 $user_submit=mysqli_query($conn,$user_query) or die(mysqli_error($conn));
	header("Location: success.html");
?>
