<?php
session_start();

include('db.php');
include('check_session.php');
?>
<?php include('header.php'); ?>


<form  method="post" action="server.php">
		<span class="login100-form-title">
			Enter Inward Data
		</span>
		<div class="wrap-input100 ">
	<!--		<input class="input100" type="text" name="org" placeholder="Organization">   -->
		<select class="input100" type="text" name="org">
			<option value="">Select Organization</option>
			<?php
				$sql = "select org_name from master_org where status='Active'";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)) {
					echo "<option value='". $row['org_name']. "'>". $row['org_name']."</option>";
				}
			?> 
		</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-user" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
		<!--	<input class="input100" type="text" name="state" placeholder="State">  -->
			<select class="input100" type="text" name="state">
				<option value="">Select State</option>
					<?php
						$sql = "select state_name from master_state where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['state_name']. "'>". $row['state_name']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="file_no" placeholder="File No"> 
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
		<div class="wrap-input100 ">
		<!--	<input class="input100" type="text" name="docu_type" placeholder="Document Type"> -->
			<select class="input100" type="text" name="docu_type">
				<option value="">Document Type</option>
					<?php
						$sql = "select doc_type from master_doc where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['doc_type']. "'>". $row['doc_type']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="vol" placeholder="Volume">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="proj_id" placeholder="Project ID">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="date" name="receive_dt" placeholder="Receive Date">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="given_by" placeholder="Given By">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
		<!--	<input class="input100" type="text" name="taken_by" placeholder="Taken By"> -->
			<select class="input100" type="text" name="taken_by" >
				<option value="">Taken By</option>
					<?php
						$sql = "select taken_by from master_taken_by where status='Active'";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)) {
							echo "<option value='". $row['taken_by']. "'>". $row['taken_by']."</option>";
						}
					?> 
			</select>
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>	
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Submit" name="submit2" />
		</div>
		<div class="text-center p-t-136">
			<a class="txt2" href="doc_prep&scan.php">
				Next
				<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
			</a>
		</div>
	<!--	<form action="#" method="POST" align="right">
			
		</form> -->
		<button type="submit" name="logout">Logout</button>
	</form>


	

	
	
<?php include('footer.php') ?>