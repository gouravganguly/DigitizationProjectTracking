<?php
session_start();
if(isset($_SESSION['email1']))
{	 
	if(isset($_POST['submit'])) {
		session_unset();
		session_destroy();
		header("Location: login-admin.php");
		exit();
	}
}
else {
	header("Location: login-admin.php");
}
?>
<?php include('header.php'); ?>
<!--<?php //include('server2.php'); ?> -->
<form action="#" method="POST">
	<button type="submit" name="submit">Logout</button>
</form>
<!-- Rounded switch -->
<br>

<div >
	<a href="user-activation.php">User Activation</a>	
</div>
<!--
<form class="login100-form" method="POST" action="#">
	<div class="text-center p-t-136">
		<button type="submit" name="submit1">User Activation</button>
	</div>
</form>  -->

<?php include('footer.php') ?>