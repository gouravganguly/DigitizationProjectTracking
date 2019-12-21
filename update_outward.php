<?php
session_start();

include('db.php');
include('check_session.php');

?>
<?php include('header.php') ?>
<form  method="post" action="server.php">
		<span class="login100-form-title">
			Update Outward
		</span>
		<div class="wrap-input100 ">
		<select class="input100" type="text" name="file_no">
			<option value="">Select File</option>
			<?php
				$sql = "select file_no from outward_data";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)) {
					echo "<option value='". $row['file_no']. "'>". $row['file_no']."</option>";
				}
			?> 
		</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-user" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<input class="input100" type="date" name="handover_date" placeholder="Handover Date"> 
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
	
		<div class="wrap-input100 ">
		<select class="input100" type="text" name="given_by">
			<option value="">Given By</option>
			<?php
				$sql = "select given_out_name from master_given_out_by where status='Active'";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)) {
					echo "<option value='". $row['given_out_name']. "'>". $row['given_out_name']."</option>";
				}
			?> 
		</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-user" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="taken_by" placeholder="Taken By">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Update" name="submit51" />
		</div>
		<div class="text-center p-t-136">
			<a class="txt2" href="outward.php">
				Back
				<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<button type="submit" name="logout">Logout</button>
	</form>
	
	
<?php include('footer.php') ?>