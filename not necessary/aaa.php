<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<form method="post" action="#" align="center">
		<input type="submit" name="submitt" value="Enter" >
	</form>
	<?php
		include('db.php');
		$name = 'gaurav';
		$roll_no = 5;
		$id  = 555;

		if(isset($_POST['submitt'])) {
			$sql = "insert into aa (name,roll_no,id) values ('zzz',1,5)";
			mysqli_query($conn,$sql);
			//echo "Done";	
			$sql1 = "update aa set name='$name' where id='555'";
			mysqli_query($conn,$sql1);
			echo "Yes";
		}
	?>
</body>
</html>
