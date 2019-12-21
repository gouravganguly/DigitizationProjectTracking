<?php include('header.php'); ?>
<center>
Hello People
</center>
<form action="#" method="POST">
	<button type="submit" name="submit">Logout</button>
</form>
<?php
session_start();
echo "hello ";
if(isset($_SESSION['u_name']))
{	
	$username = $_SESSION['u_name']; 
	echo "$username are logged in!";

	if(isset($_POST['submit'])) {
		session_unset();
		session_destroy();
		header("Location: login1.php");
		exit();
	}
}
else {
	header("Location: login1.php");
}
?>
<?php include('footer.php') ?>