<!DOCTYPE html>

<?php
$select="select *from students WHERE user_type='student'";
$res=mysqli_query($conn,$select);

?>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js" type="text/javascript"></script>

	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

	<script type="text/javascript">
      $(document).ready(function() {
        $('table').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
<title>Student Attendance | Gym</title>
	
	</head>
<body>
	<div class="table-responsive">
		<h1><center><b>STUDENT ATTENDANCE</b></center></h1>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>SNo</th>
					<th>Name</th>
					<th>ROll</th>
					<?php
					$day=date("d");
					$year=date("Y");
					$month=date("m");
						for($i=1;$i<=date(("d"));$i++){
							?>
								<th><?php echo $i.'-'.$month.'-'.$year ?></th>
							<?php
						}
						?>
					</tr>
				</thead>
		</tr>
	</thead>
	<tbody>
		<?php
		$r=1;
		while($row=mysqli_fetch_array($res)){
			?>
			<tr><td><b><?php echo $r++;?></b></td>
				<td><b><?php echo $row["name"];?></b></td>
				<td><b><?php echo $row["roll"];?></b></td>
				<?php 
				for($i=1;$i<=date("d");$i++){

					$loop_day = date('D', strtotime(($i+1).' day'));

					if ($loop_day == 'Sun') {
						?>
						<td style="color: red"><b><?php echo "Sunday";?></b></td>
						<?php
					}else {

						$fullDate = date('Y-m-').$i;
						$holidayQuery  = mysqli_query($conn, "SELECT * FROM holidays WHERE '".$fullDate."' BETWEEN `from_date` and `to_date`");
						$holidayCount = mysqli_num_rows($holidayQuery);
						$holidayFetch = mysqli_fetch_array($holidayQuery);

						if ($holidayCount) {
							?>
							<td style="color: blue;"><b><?php echo $holidayFetch['reason']; ?></b></td>
							<?php
						}
						else {

							$select1="select * from attendance where roll='$row[roll]' and date='".date('Y-m-').$i."'";
							$res1=mysqli_query($conn,$select1);
							$rc=mysqli_num_rows($res1);
							if ($rc>0) {
								?>
									<td style="color: lightgreen"><b><?php echo "Present";?></b></td>
								<?php
							}
							else{
								?>
									<td style="color:orange"><b><?php echo "Absent";?></b></td>
								<?php
							}

						}

					}
				}
				?>
			</tr>

		<?php }
		?>

	</tbody>
</table>
</div>
</body>
</html>