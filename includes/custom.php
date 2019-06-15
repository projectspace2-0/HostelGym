<!DOCTYPE html>
<html>
<head>
	<title>Reports | Gym</title>
</head>
<body>
	<div class="container">
		<div class="row">
			

			<div class="col-md-4 " style="margin:auto;margin-top:10%;">
				<center><h4>Custom Reports</h4></center>
				<form action="" method="post">
					<label>From:</label>
					<input class="form-control" type="date" name="fromdate" required>
					<br>
					<br>
					<label>To:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<input class="form-control" type="date" name="todate" required>
					<br>
					<br>
					<button type="submit" class="form-control btn btn-success" name="getReports">Get Reports</button>
				</form>
			</div>

		</div>
	</div>

	<?php
		if (isset($_POST['getReports'])) {
			$abcd=$_POST['fromdate'];
			$page = base64_encode("getreports");
			echo "<script>location.href='?p=".$page."&fromdate=".$abcd."&todate=".$_POST['todate']."'</script>";
		}
	?>


</body>
</html>