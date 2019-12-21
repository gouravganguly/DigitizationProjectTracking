<?php
session_start();

include('db.php');
include('check_session.php');
?>
<?php include('header.php'); ?>
<form  method="post" action="server.php">
		<span class="login100-form-title">
			Image Cleansing
		</span>

		<div class="wrap-input100 ">
		<select class="input100" type="text" name="file_no">
			<option value="">Select File</option>
			<?php
				$sql = "select file_no from doc_scan_data";
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
			<select class="input100" type="text" name="img_clean_by">
				<option value="">Image Cleansed By</option>
					<?php
						$sql = "select img_clean_by from master_img_clean where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['img_clean_by']. "'>". $row['img_clean_by']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<input class="input100" type="date" name="img_clean_date" placeholder="Image Clean Date"> 
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="img_clean_pages" placeholder="Image Clean Pages">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<br>
		<span class="login100-form-title">
			Data Entry
		</span>		
		<div class="wrap-input100 ">
			<select class="input100" type="text" name="data_entry_by">
				<option value="">Data Entry By</option>
					<?php
						$sql = "select data_entry_by from master_data_entry where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['data_entry_by']. "'>". $row['data_entry_by']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>
		
		
		<div class="wrap-input100 ">
			<input class="input100" type="date" name="data_entry_date" placeholder="Data Entry Date">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<br>
		<span class="login100-form-title">
			Quality Control
		</span>		
		
		<div class="wrap-input100 ">
			<select class="input100" type="text" name="qc_by">
				<option value="">Quality Control By</option>
					<?php
						$sql = "select qc_by from master_qc where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['qc_by']. "'>". $row['qc_by']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<input class="input100" type="date" name="qc_date" placeholder="QC Date">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>

		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Submit" name="submit4" />
		</div>
		<div><br>
			<a href="update_img_clean.php">Update</a>
		</div>
		<div class="text-center p-t-136">
			<a class="txt2" href="doc_prep&scan.php">
				<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
				Back
			</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="txt2" href="outward.php">
				Next
				<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<button type="submit" name="logout">Logout</button>
	</form>
	
	
<?php include('footer.php'); ?> 