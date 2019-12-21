<?php
session_start();

include('db.php');
include('check_session.php');

?>
<?php include('header.php') ?>
<form  method="post" action="excel.php">
		<span class="login100-form-title">
			Report Generation
		</span>
		
		
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Export to Excel" name="export_excel" />
		</div>

		<div class="text-center p-t-136">
			<a class="txt2" href="outward.php">
				Back
				<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<br><br>
			<button type="submit" name="logout">Logout</button>
	</form>
<?php include('footer.php') ?>