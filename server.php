<?php
	session_start();	
	include('db.php');
	date_default_timezone_set('Asia/Kolkata');
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; */
if(isset($_POST['logout'])) {
		session_unset();
		session_destroy();
		header("Location: login1.php?successfully_logged_out");
		exit();
}

if(isset($_POST['submit'])) {
			
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	if(empty($email) || empty($pass)) {
		header("Location: login1.php?login=empty");
		exit();
	}
	else { 
		$sql = "select * from userinfo where email='$email' and password='$pass' and status='Active'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) { 
			header("Location: login1.php?login=error");
			exit();
		}
		else {
			if($row = mysqli_fetch_assoc($result)) {
				$_SESSION['u_name'] = $row['name'];
				$_SESSION['u_email'] = $row['email'];
				header("Location: inward.php?login=success");
				exit();
			}
		}
/*
		$sql = "select * from userinfo where email='$email'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			header("Location: login1.php?login=error1");
			exit();
		}
		else {
			if($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pass, $row['password']);
				echo $hashedPwdCheck ? 'true' : 'false';
		//		echo $pass;
		//		echo $row['password'];
			//	if($hashedPwdCheck == false) {
					
			//		header("Location: login1.php?login=error2");
			//		exit();
		//		} elseif ($hashedPwdCheck == true) {
			//		$_SESSION['u_name'] = $row['name'];
			//		$_SESSION['u_email'] = $row['email'];
			//		header("Location: hello.php?login=success");
		//			exit();
		//		  }  
			}
		}
*/
	}
}	
if(isset($_POST['submit1']))
{
	//echo "Entered submit form";
	$name = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass1 = mysqli_real_escape_string($conn,$_POST['pass1']);
	$pass2 = mysqli_real_escape_string($conn,$_POST['pass2']);

	if(empty($name) ||empty($email) || empty($pass1) || empty($pass2) ) {
		header("Location: login1.php?signup=empty");
		exit();
	}
	else { 
		if(!preg_match("/^[a-zA-Z]*$/",$name)){
			 header("Location: login1.php?signup=invalidName");
			 exit();
		} else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: login1.php?signup=invalidEmail");
			 	exit();
			} 
			else {
				$sql = "select * from userinfo where email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0) {
					header("Location: login1.php?signup=emailExists");
					exit();
				} else {
					//Hashing
			//		$hashedPwd = password_hash($pass1,PASSWORD_DEFAULT);
					$sql = "insert into userinfo values('$name','$email','$pass1','Inactive')";
					mysqli_query($conn,$sql);
					header("Location: login1.php?signup=success");
					exit();
				}
			}

		}

	}
}

if(isset($_POST['submit2']))
{
	$org = mysqli_real_escape_string($conn,$_POST['org']);
	$state = mysqli_real_escape_string($conn,$_POST['state']);
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$docu_type = mysqli_real_escape_string($conn,$_POST['docu_type']);
	$vol = mysqli_real_escape_string($conn,$_POST['vol']);
	$proj_id = mysqli_real_escape_string($conn,$_POST['proj_id']);
	$receive_date = mysqli_real_escape_string($conn,$_POST['receive_dt']);
	$given_by = mysqli_real_escape_string($conn,$_POST['given_by']);
	$taken_by = mysqli_real_escape_string($conn,$_POST['taken_by']);
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($org) ||empty($state) || empty($file_no) || empty($docu_type) || empty($vol) || empty($proj_id) || empty($receive_date) || empty($given_by) || empty($taken_by) ) {
		header("Location: inward.php?value=empty");
		exit();
	}
	else {
		$sql1  = "select * from inward_data where file_no='$file_no'";
		$result = mysqli_query($conn,$sql1);
		$resultCheck = mysqli_fetch_assoc($result);
		if($resultCheck > 0 ) {
			header("Location: inward.php?file=exists");
			exit();
		} 
		else {
			$sql = "insert into inward_data values('$org','$state','$file_no','$docu_type','$vol','$proj_id','$receive_date','$given_by','$taken_by','$entry_update_by','$entry_date_time')";
			mysqli_query($conn,$sql);
//			$sql1 = "insert into final_report (org, state, file_no, docu_type, vol, proj_id, receive_date, given_by, taken_by) values ('$org','$state','$file_no','$docu_type','$vol','$proj_id','$receive_date','$given_by','$taken_by')";
//			mysqli_query($conn,$sql1);
			header("Location: doc_prep&scan.php?success");
			exit();
		}
	}
}
if(isset($_POST['submit3']))
{
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$doc_prep = mysqli_real_escape_string($conn,$_POST['doc_prep']);
	$doc_prep_date = mysqli_real_escape_string($conn,$_POST['doc_prep_date']);
	$a4 = mysqli_real_escape_string($conn,$_POST['a4']);
	$a3 = mysqli_real_escape_string($conn,$_POST['a3']);
	$a2 = mysqli_real_escape_string($conn,$_POST['a2']);
	$a1 = mysqli_real_escape_string($conn,$_POST['a1']);
	$a0 = mysqli_real_escape_string($conn,$_POST['a0']);
	$total = $a4 + $a3 + $a2 + $a1 + $a0;
	$scan_by =  mysqli_real_escape_string($conn,$_POST['scan_by']);
	$scan_by_date = mysqli_real_escape_string($conn,$_POST['scan_by_date']);
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no) || empty($doc_prep) || empty($doc_prep_date) || empty($total) || empty($scan_by) || empty($scan_by_date)) {
		header("Location: doc_prep&scan.php?value=empty");
		exit();
	} 
	else {  
		$sql1  = "select * from doc_scan_data where file_no='$file_no'";
		$result = mysqli_query($conn,$sql1);
		$resultCheck = mysqli_fetch_assoc($result);
		if($resultCheck > 0 ) {
			header("Location: doc_prep&scan.php?data=exists");
			exit();
		} 
		else {
			$sql = "insert into doc_scan_data values('$file_no','$doc_prep','$doc_prep_date','$a4','$a3','$a2','$a1','$a0','$total','$scan_by','$scan_by_date','$entry_update_by','$entry_date_time')";
			mysqli_query($conn,$sql);
			$sql1 = "update final_report set prepared_by='$doc_prep',prep_date='$doc_prep_date',a4='$a4',a3='$a3',a2='$a2',a1='$a1',a0='$a0',total='$total',scanned_by='$scan_by',scan_date='$scan_by_date' where file_no='$file_no'";
			mysqli_query($conn,$sql1);
			header("Location: img_clean&qc.php?success");
			exit();
		}
	}
}

if(isset($_POST['submit31']))
{
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$doc_prep = mysqli_real_escape_string($conn,$_POST['doc_prep']);
	$doc_prep_date = mysqli_real_escape_string($conn,$_POST['doc_prep_date']);
	$a4 = mysqli_real_escape_string($conn,$_POST['a4']);
	$a3 = mysqli_real_escape_string($conn,$_POST['a3']);
	$a2 = mysqli_real_escape_string($conn,$_POST['a2']);
	$a1 = mysqli_real_escape_string($conn,$_POST['a1']);
	$a0 = mysqli_real_escape_string($conn,$_POST['a0']);
	$total = $a4 + $a3 + $a2 + $a1 + $a0;
	$scan_by =  mysqli_real_escape_string($conn,$_POST['scan_by']);
	$scan_by_date = mysqli_real_escape_string($conn,$_POST['scan_by_date']);
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no) || empty($doc_prep) || empty($doc_prep_date) || empty($total) || empty($scan_by) || empty($scan_by_date)) {
		header("Location: update_doc_prep.php?value=empty");
		exit();
	} 
	else {  
		$sql = "update doc_scan_data set prepared_by='$doc_prep',prep_date='$doc_prep_date',a4='$a4',a3='$a3',a2='$a2',a1='$a1',a0='$a0',total='$total',scanned_by='$scan_by',scan_date='$scan_by_date',entry_update_by='$entry_update_by',entry_date_time='$entry_date_time' where file_no='$file_no'";
		mysqli_query($conn,$sql);
		$sql1 = "update final_report set prepared_by='$doc_prep',prep_date='$doc_prep_date',a4='$a4',a3='$a3',a2='$a2',a1='$a1',a0='$a0',total='$total',scanned_by='$scan_by',scan_date='$scan_by_date' where file_no='$file_no'";
		mysqli_query($conn,$sql1);
		header("Location: doc_prep&scan.php?success");
		exit();
	}
}

if(isset($_POST['submit4']))
{
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$img_clean_by = mysqli_real_escape_string($conn,$_POST['img_clean_by']);
	$img_clean_date= mysqli_real_escape_string($conn,$_POST['img_clean_date']);
	$img_clean_pages = mysqli_real_escape_string($conn,$_POST['img_clean_pages']);
	
	$sql ="select total from doc_scan_data where file_no='$file_no'";
	$result = mysqli_query($conn,$sql);
	if($row = mysqli_fetch_assoc($result)) {
		$total_pages = $row['total'];
	}
	$diff=$total_pages - $img_clean_pages;
	$data_entry_by = mysqli_real_escape_string($conn,$_POST['data_entry_by']);
	$data_entry_date = mysqli_real_escape_string($conn,$_POST['data_entry_date']);
	$qc_by = mysqli_real_escape_string($conn,$_POST['qc_by']);
	$qc_date = mysqli_real_escape_string($conn,$_POST['qc_date']);	
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no) || empty($img_clean_by) || empty($img_clean_date) || empty($data_entry_by) || empty($data_entry_date) || empty($qc_by) || empty($qc_date)) {
		header("Location: img_clean&qc.php?value=empty");
		exit();
	}
	else { 
		$sql1  = "select * from img_clean_qc_data where file_no='$file_no'";
		$result = mysqli_query($conn,$sql1);
		$resultCheck = mysqli_fetch_assoc($result);
		if($resultCheck > 0 ) {
			header("Location: img_clean&qc.php?data=exists");
			exit();
		} 
		else {
			$sql2 = "insert into img_clean_qc_data values('$file_no','$img_clean_by','$img_clean_date','$img_clean_pages','$total_pages','$diff','$data_entry_by','$data_entry_date','$qc_by','$qc_date','$entry_update_by','$entry_date_time')";
			mysqli_query($conn,$sql2);
			$sql = "update final_report set img_clean_by='$img_clean_by',img_clean_date='$img_clean_date',img_clean_pages='$img_clean_pages',data_entry_by='$data_entry_by',data_entry_date='$data_entry_date',qc_by='$qc_by',qc_date='$qc_date' where file_no='$file_no'";
			mysqli_query($conn,$sql);
			header("Location: outward.php?success");
			exit();
		}
	}
}
if(isset($_POST['submit41']))
{
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$img_clean_by = mysqli_real_escape_string($conn,$_POST['img_clean_by']);
	$img_clean_date= mysqli_real_escape_string($conn,$_POST['img_clean_date']);
	$img_clean_pages = mysqli_real_escape_string($conn,$_POST['img_clean_pages']);
	
	$sql ="select total from doc_scan_data where file_no='$file_no'";
	$result = mysqli_query($conn,$sql);
	if($row = mysqli_fetch_assoc($result)) {
		$total_pages = $row['total'];
	}
	$diff=$total_pages - $img_clean_pages;
	$data_entry_by = mysqli_real_escape_string($conn,$_POST['data_entry_by']);
	$data_entry_date = mysqli_real_escape_string($conn,$_POST['data_entry_date']);
	$qc_by = mysqli_real_escape_string($conn,$_POST['qc_by']);
	$qc_date = mysqli_real_escape_string($conn,$_POST['qc_date']);	
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no) || empty($img_clean_by) || empty($img_clean_date) || empty($img_clean_pages) || empty($total_pages) || empty($diff) || empty($data_entry_by) || empty($data_entry_date) || empty($qc_by) || empty($qc_date)) {
		header("Location: update_img_clean.php?value=empty");
		exit();
	}
	else { 
			$sql = "update img_clean_qc_data set img_clean_by='$img_clean_by',img_clean_date='$img_clean_date',img_clean_pages='$img_clean_pages',data_entry_by='$data_entry_by',data_entry_date='$data_entry_date',qc_by='$qc_by',qc_date='$qc_date',entry_update_by='$entry_update_by',entry_date_time='$entry_date_time' where file_no='$file_no'";
			mysqli_query($conn,$sql);
			$sql1 = "update final_report set img_clean_by='$img_clean_by',img_clean_date='$img_clean_date',img_clean_pages='$img_clean_pages',data_entry_by='$data_entry_by',data_entry_date='$data_entry_date',qc_by='$qc_by',qc_date='$qc_date' where file_no='$file_no'";
			mysqli_query($conn,$sql1);
			header("Location: img_clean&qc.php?success");
			exit();
	}
}

if(isset($_POST['submit5'])) {
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$handover_date = mysqli_real_escape_string($conn,$_POST['handover_date']);
	$given_by = mysqli_real_escape_string($conn,$_POST['given_by']);
	$taken_by = mysqli_real_escape_string($conn,$_POST['taken_by']);
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no) || empty($handover_date) || empty($given_by) || empty($taken_by)) {
		header("Location: outward.php?value=empty");
		exit();
	} 
	else {
		$sql1  = "select * from outward_data where file_no='$file_no'";
		$result = mysqli_query($conn,$sql1);
		$resultCheck = mysqli_fetch_assoc($result);
		if($resultCheck > 0 ) {
			header("Location: outward.php?data=exists");
			exit();
		} 
		else {
			$sql = "insert into outward_data values('$file_no','$handover_date','$given_by','$taken_by','$entry_update_by','$entry_date_time')";
			mysqli_query($conn,$sql);
			$sql1 = "update final_report set handover_date='$handover_date',given_out_by='$given_by',taken_out_by='$taken_by' where file_no='$file_no'"; 
			mysqli_query($conn,$sql1);
			header("Location: report.php?success");
			exit();	
		}
	}
}
if(isset($_POST['submit51'])) {
	$file_no = mysqli_real_escape_string($conn,$_POST['file_no']);
	$handover_date = mysqli_real_escape_string($conn,$_POST['handover_date']);
	$given_by = mysqli_real_escape_string($conn,$_POST['given_by']);
	$taken_by = mysqli_real_escape_string($conn,$_POST['taken_by']);
	$entry_update_by = $_SESSION['u_name'];
	$entry_date_time = date('Y-m-d H:i:s');

	if(empty($file_no || $handover_date || $given_by || $taken_by)) {
		header("Location: update_outward.php?value=empty");
		exit();
	} 
	else {
			$sql = "update outward_data set handover_date='$handover_date',given_out_by='$given_by',taken_out_by='$taken_by',entry_update_by='$entry_update_by',entry_date_time='$entry_date_time' where file_no='$file_no'"; 
			mysqli_query($conn,$sql);
			$sql1 = "update final_report set handover_date='$handover_date',given_out_by='$given_by',taken_out_by='$taken_by' where file_no='$file_no'"; 
			mysqli_query($conn,$sql1);
			header("Location: outward.php?success");
			exit();	
	}
}
else {
	header("Location: login1.php");
	exit();
} 		
?>