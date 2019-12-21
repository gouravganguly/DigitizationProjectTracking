<?php

session_start();

include('db.php');

if(isset($_POST['submit'])) {

	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	$sql = "select * from admin where email='$email' and pass='$pass'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) < 1) {
		header("Location: login-admin.php?login=error");
		exit();
	}
	else {
		if($row = mysqli_fetch_assoc($result)) {
			$_SESSION['email1'] = $row['email'];
			header("Location: user-activation.php");
			exit();
		}
	}
}
if($_POST['button1']) {
	header("Location: hello.php");
}
if(isset($_POST['logout'])) {
	session_unset();
	session_destroy();
	header("Location: login-admin.php?successfully_logged_out");
	exit();
}
else {
	header("Location: login-admin.php");
}

?>