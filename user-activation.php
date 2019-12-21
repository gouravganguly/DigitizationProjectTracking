<?php
	session_start(); 
	include('header.php'); 
	if(!isset($_SESSION['email1'])) {	
		header("Location: login-admin.php");
}
?>
<form class="login100-form" action="server2.php" method="POST">
	<span class="login100-form-title">
			User Activation
	</span>
<?php
include('db.php');
$output='';
$sql = "select * from userinfo";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0) {
	$output .= '<table border="1" style="width:100%">
					<tr>
						<th><center>Name</center></th>
						<th><center>Email</center></th>
						<th width="30%"><center>Status</center></th>
						<th><center>Change Status</center></th>
					</tr>'
	;
	$a = 1;	
	while($row = mysqli_fetch_array($result))
	{
		$b = 'button'.$a;
		$c = "$b"; 
		$output .=' <tr>
						<td><center>' . $row['name'] . '</center></td>	
						<td><center>' . $row['email'] . '</center></td>			
						<td><center>' . $row['status'] . '</center></td>
						<td><center>' .'<button type="submit" name="'.$c.'">EDIT</button>'.'</center></td>
					</tr>		
		';			
		$a = $a + 1;
	}
}
$output .='</table>';
echo $output;
?>
<button type="submit" name="logout">Logout</button>
</form>
<?php include('footer.php') ?>
