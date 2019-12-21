<?php
include('db.php');
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['export_excel'])) {

	$output='';	
	$sql = "select * from final_report";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
		$output .= '
			<table>
				<tr></tr>
			</table>
			<table border="1">
				<tr>
					<th colspan="1"></th>
					<th colspan="9" bgcolor="#ffffcc">Inward</th>
					<th colspan="2" bgcolor="#9999ff">Document Preparation</th> 
					<th colspan="8" bgcolor="#ccffcc">Document Scanning(Last Scan Date)</th>
					<th colspan="4" bgcolor="#ccff99">Image Cleansing</th>
					<th colspan="2" bgcolor="#ffcc66">Data Entry</th>
					<th colspan="2" bgcolor="#33cc33">Quality Control</th>
					<th colspan="3" bgcolor="#ffffcc">Outward</th>
				</tr>
				<tr>
					<th bgcolor="#ffffcc">Sl. No</th>
					<th bgcolor="#ffffcc">Organization</th>
					<th bgcolor="#ffffcc">State</th>
					<th bgcolor="#ffffcc">File No</th>
					<th bgcolor="#ffffcc">Document Type</th>
					<th bgcolor="#ffffcc">Volume</th>
					<th bgcolor="#ffffcc">Project ID</th>
					<th bgcolor="#ffffcc">Receive Date</th>
					<th bgcolor="#ffffcc">Given By</th>
					<th bgcolor="#ffffcc">Taken By</th>
					<th bgcolor="#9999ff">Prepared By</th>
					<th bgcolor="#9999ff">Prepared Date</th>
					<th bgcolor="#ccffcc">Scan By</th>
					<th bgcolor="#ccffcc">(Re)Scan Date</th>
					<th bgcolor="#ccffcc">A4/Legal</th>
					<th bgcolor="#ccffcc">A3/Other</th>
					<th bgcolor="#ccffcc">A2</th>
					<th bgcolor="#ccffcc">A1</th>
					<th bgcolor="#ccffcc">A0</th>
					<th bgcolor="#ccffcc">Scan Pages</th>
					<th bgcolor="#ccff99">Img By</th>
					<th bgcolor="#ccff99">ImgCln Date</th>
					<th bgcolor="#33cc33">ImgCln Pages</th>
					<th bgcolor="#ff5050">Diff in Pg</th>
					<th bgcolor="#ffcc66">DE by</th>
					<th bgcolor="#ffcc66">DE Date</th>
					<th bgcolor="#33cc33">QC Done By</th>
					<th bgcolor="#33cc33">QC Date</th>
					<th bgcolor="#ffffcc">Handover Date</th>
					<th bgcolor="#ffffcc">Given By</th>
					<th bgcolor="#ffffcc">Taken By</th>
				</tr>
		'; 
		$num = 1;
		while($row = mysqli_fetch_array($result))
		{
			
			$output .='
				<tr>
					<td>'.$num.'</td>
					<td>'.$row["org"].'</td>
					<td>'.$row["state"].'</td>
					<td>'.$row["file_no"].'</td>
					<td>'.$row["docu_type"].'</td>
					<td>'.$row["vol"].'</td>
					<td>'.$row["proj_id"].'</td>
					<td>'.$row["receive_date"].'</td>
					<td>'.$row["given_by"].'</td>
					<td>'.$row["taken_by"].'</td>
					<td>'.$row["prepared_by"].'</td>
					<td>'.$row["prep_date"].'</td>
					<td>'.$row["scanned_by"].'</td>
					<td>'.$row["scan_date"].'</td>
					<td>'.$row["a4"].'</td>
					<td>'.$row["a3"].'</td>
					<td>'.$row["a2"].'</td>
					<td>'.$row["a1"].'</td>
					<td>'.$row["a0"].'</td>
					<td>'.$row["total"].'</td>
					<td>'.$row["img_clean_by"].'</td>
					<td>'.$row["img_clean_date"].'</td>
					<td>'.$row["img_clean_pages"].'</td>
					<td>'.$row["diff"].'</td>
					<td>'.$row["data_entry_by"].'</td>
					<td>'.$row["data_entry_date"].'</td>
					<td>'.$row["qc_by"].'</td>
					<td>'.$row["qc_date"].'</td>
					<td>'.$row["handover_date"].'</td>
					<td>'.$row["given_out_by"].'</td>
					<td>'.$row["taken_out_by"].'</td>
				</tr>
			';
			$num++;
		}
		$output .='</table>';
		$xls_filename = 'export_'.date('d-m-Y H:i:s').'.xls';
		header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=$xls_filename");
		echo $output;
	} 
}

else {
	header("Location: login1.php");
	exit();
}

?>