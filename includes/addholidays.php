
<!DOCTYPE html>
<html>
<head>
	<title>Holidays | Gym</title>
</head>
<body>
	<div class="container">
		<div class="row">
			

			<div class="col-md-4 " style="margin:auto;margin-top:5%;">
				<center><h1><b>Add Holiday</b></h1></center>
				<form action="" method="post">
					<label>From:</label>
					<input class="form-control" type="date" name="fromdate" required>
					<br>
					<br>
					<label>To:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<input class="form-control" type="date" name="todate" required>
					<br>
					<br>
					<label>Reason:</label>
					<input class="form-control" type="text" name="reason" placeholder="Enter Holiday reason" required>
					<br>
					<br>
					<button type="submit" class="form-control btn btn-success" name="addholiday">Add Holiday</button>
				</form>
			</div>

		</div>
	</div>

	<?php
	$fromdate='fromdate';
		if (isset($_POST['addholiday'])) 
		{
			 $insert="INSERT into holidays SET `from_date`='".$_POST['fromdate']."' ,`to_date`='".$_POST['todate']."' ,`reason`='".$_POST['reason']."'";
			$res=mysqli_query($conn,$insert);
		 echo "<script>location.href='?p=".base64_encode('holidays')."'</script>";
		}
	?>


</body>
</html>