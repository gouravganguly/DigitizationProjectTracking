<?php
session_start();

include('db.php');
include('check_session.php');
?>
<?php include('header.php') ?>
<form  method="post" action="server.php">
		<span class="login100-form-title">
			Outward
		</span>
		<div class="wrap-input100 ">
		<select class="input100" type="text" name="file_no">
			<option value="">Select File</option>
			<?php
				$sql = "select file_no from img_clean_qc_data";
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
			<input type="submit" class="login100-form-btn" value="Submit" name="submit5" />
		</div><br>
		<div>
			<a href="update_outward.php">Update</a>
		</div>
		<div class="text-center p-t-136">
			<a class="txt2" href="img_clean&qc.php">
				<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
				Back
			</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="txt2" href="report.php">
				Next
				<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<button type="submit" name="logout">Logout</button>
	</form>
	
	
<?php include('footer.php') ?>