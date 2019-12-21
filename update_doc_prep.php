<?php
session_start();

include('db.php');
include('check_session.php');
?>
<?php include('header.php') ?>
<form  method="post" action="server.php">
		<span class="login100-form-title">
			Update Doc Preparation
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
			<select class="input100" type="text" name="doc_prep">
				<option value="">Doc Prepared By</option>
					<?php
						$sql = "select doc_prep_by from master_doc_prep where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['doc_prep_by']. "'>". $row['doc_prep_by']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<input class="input100" type="date" name="doc_prep_date" placeholder="Preparation Date"> 
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
		<br>
		<span class="login100-form-title">
			Update Scan Details
		</span>
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="a4" placeholder="A4/Legal">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="a3" placeholder="A3/Other">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="a2" placeholder="A2">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="a1" placeholder="A1">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		
		<div class="wrap-input100 ">
			<input class="input100" type="number" min="0" name="a0" placeholder="A0">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<select class="input100" type="text" name="scan_by">
				<option value="">Scanned By</option>
					<?php
						$sql = "select scan_by_name from master_scan_by where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['scan_by_name']. "'>". $row['scan_by_name']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>

		<div class="wrap-input100 ">
			<input class="input100" type="date" name="scan_by_date" placeholder="Scanned Date">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Update" name="submit31" />
		</div><br>

		<div class="text-center p-t-136">
			<a class="txt2" href="doc_prep&scan.php">
				Back
			<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
			</a>
		</div>
		<button type="submit" name="logout">Logout</button>
	</form>
	
	
<?php include('footer.php') ?>