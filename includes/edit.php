<?php
include("config.php");


@$ID=($_GET['ID']);
$query="select * from students where roll='$ID'";
$result1=mysqli_query($conn,$query);
$fetch_details=mysqli_fetch_array($result1);
?>
?>

<html>
<head>
	

	<style>
		.main{
			/*height:1100px;*/
			background-repeat: no-repeat;
		}
		.r1{
			/*	height:800px;*/
			margin-top:4%;

		}
		.page{
			background-color:white;	
			opacity:0.7;
			margin: auto;

			background-repeat:no-repeat;
			background-position:center;
			background-size:100%;

		}
		h3{
			text-decoration:underline;
		}
	</style>
</head>
<body>
	<div class="container main">

		<div class="row r1">
			<div class="col-md-offset-4 col-md-8 page">

				<form action="" method="post">
					<div class="row">

					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-4">
							<center><u><h1>UPDATE FORM</h1></center><br><br></u>
						</div>
					</div>

					<div class="row">
						<div class="col-md-offset-3 col-md-2">
							<label>Roll No:</label>

						</div>

						<div class="col-md-4">
							<input class="form-control " type="text" name="roll" id="roll"  value="<?php echo $fetch_details[2]; ?>" required/>
						</div>

						
						<div class="col-md-offset-3 col-md-2">
							<label>Name:</label>
						</div>
						<div class="col-md-4">
							<input class="form-control"  type="text" name="name" id="name" value="<?php echo $fetch_details[1]; ?>" required />
						</div>
					</div>
					<br>
				</br>
				<div class="row">
					<div class="col-md-offset-3 col-md-2 ">
						<label>College:</label>
					</div>
					<div class="col-md-4">
						<select class="form-control" id="college" name="college" required>
							<option value="">--select college--</option>
							<option value="AEC"  <?php if($fetch_details['college']=='AEC'){ echo "selected"; } ?> >AEC</option>
							<option value="ACET" <?php if($fetch_details['college']=='ACET'){ echo "selected"; } ?> >ACET</option>
							<option value="ACOE" <?php if($fetch_details['college']=='ACOE'){ echo "selected"; } ?>  >ACOE</option>
							<option value="APTC" <?php if($fetch_details['college']=='APTC'){ echo "selected"; } ?> >APTC</option>
							<option value="APC" <?php if($fetch_details['college']=='APC'){ echo "selected"; } ?>   >APC</option>
							<option value="ACP" <?php if($fetch_details['college']=='ACP'){ echo "selected"; } ?> >ACP</option>
							<option value="AGBS"  <?php if($fetch_details['college']=='AGBS'){ echo "selected"; } ?>  >AGBS</option>
							<option value="AFSC" <?php if($fetch_details['college']=='AFSC'){ echo "selected"; } ?>  >AFSC</option>
							<option value="BPED" <?php if($fetch_details['college']=='BPED'){ echo "selected"; } ?>  >BPED</option>
							<option value="OTHERS" <?php if($fetch_details['college']=='OTHERS'){ echo "selected"; } ?>  >OTHERS</option>




						</select>
					</div>
					<div class="col-md-offset-3 col-md-2">
						<label>Branch:</label>
					</div>
					<div class="col-md-4">
						<select class="form-control" id="branch" name="branch" required>
							<option value="">--select Branch--</option>
							<option value="CSE" <?php if($fetch_details['branch']=='CSE'){ echo "selected"; } ?> >CSE</option>
							<option value="ECE" <?php if($fetch_details['branch']=='ECE'){ echo "selected"; } ?> >ECE</option>
							<option value="IT" <?php if($fetch_details['branch']=='IT'){ echo "selected"; } ?>  >IT</option>
							<option value="EEE"  <?php if($fetch_details['branch']=='EEE'){ echo "selected"; } ?> >EEE</option>
							<option value="MECH" <?php if($fetch_details['branch']=='MECH'){ echo "selected"; } ?>  >MECH</option>
							<option value="CIVIL"  <?php if($fetch_details['branch']=='CIVIL'){ echo "selected"; } ?> >CIVIL</option>
							<option value="PHARMA-D" <?php if($fetch_details['branch']=='PHARMA_D'){ echo "selected"; } ?> >PHARM-D</option>
							<option value="PHARMACY" <?php if($fetch_details['branch']=='PHARMACY'){ echo "selected"; } ?>  >PHARMACY</option>
							<option value="BBA" <?php if($fetch_details['branch']=='BBA'){ echo "selected"; } ?> >BBA</option>
							<option value="MBA" <?php if($fetch_details['branch']=='MBA'){ echo "selected"; } ?> >MBA</option>
							<option value="FORENSIC" <?php if($fetch_details['branch']=='FORENSIC'){ echo "selected"; } ?> >FORENSIC</option>


						</select>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-offset-3 col-md-2 ">
						<label>Year:</label>
					</div>
					<div class="col-md-4">
						<select class="form-control" id="year" name="year" required>
							<option value="">--Select year--</option>
							<option value=1 <?php if($fetch_details['year']=='1'){ echo "selected"; } ?>  >1</option>
							<option value=2 <?php if($fetch_details['year']=='2'){ echo "selected"; } ?> >2</option>
							<option value=3 <?php if($fetch_details['year']=='3'){ echo "selected"; } ?> >3</option>
							<option value=4  <?php if($fetch_details['year']=='4'){ echo "selected"; } ?> >4</option>
						</select>
					</div>
					
					<div class="col-md-offset-3 col-md-2 ">
						<label>Phone:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control"  type="text" name="phone" id="phone" value="<?php echo $fetch_details[6]; ?>" required />
					</div>
				</div>
				<br>
				<br>

				<div class="row">
					<div class="col-md-offset-3 col-md-2">
						<label>Room:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control"  type="text" name="phone" id="phone" value="<?php echo $fetch_details[8]; ?>" required />
					</div>
					<div class="col-md-offset-3 col-md-2 ">
						<label>Type:</label>
					</div>
					<div class="col-md-4">
						<select class="form-control" id="type" name="type" required>
							<option value="">--Select Type --</option>
							<option value="1" <?php if($fetch_details['type']=='1'){ echo "selected"; } ?>  >Ordinary</option>
							<option value="2"  <?php if($fetch_details['type']=='2'){ echo "selected"; } ?>>Special</option>

						</select>
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class=" col-md-offset-3 col-md-2 form-group">
						<label>Gender:</label>
					</div>
					<div class="col-md-8 ">
						<label class="radio-inline" >
							<input type="radio" value="Male" name="gender" id="gender"  <?php if($fetch_details['gender']=='Male'){ echo "checked"; } ?> >Male
						</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<label class="radio-inline" >
							<input type="radio" value="Female" name="gender" id="gender"<?php if($fetch_details['gender']=='Female'){ echo "checked"; } ?> >Female
						</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<label class="radio-inline" >
							<input type="radio" value="Others" name="gender" id="gender" <?php if($fetch_details['gender']=='Others'){ echo "checked"; } ?>>Others
						</label>	
					</div>
				</div>


				<div class="row">
					<div class="col-md-offset-3 col-md-3 form-group">
						<input class="form-control btn btn-success" value="UPDATE" type="submit" 
						name="register" id="register">
					</div>
				</div>
				<br><br>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['register']))
{

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gym";
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	@$ID=($_GET['ID']);

// $query="select * from student where ID='$ID'";
// $result1=mysqli_query($conn,$query);
// $fetch_details=mysqli_fetch_array($result1);


	$rollnumber=$_POST['roll'];
	$name=$_POST['name'];
	$branch=$_POST['branch'];
	$college=$_POST['college'];
	$year=$_POST['year'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$type=$_POST['type'];
	if($id=="")
	{
		$select="select * from students where roll='$rollnumber'";
		$result=mysqli_query($conn,$select);
		$rowcount=mysqli_num_rows($result);

		
		$update="update students set name='$name',branch='$branch',college='".$college."',year='".$year."',contact='".$phone."',gender='".$gender."',type='".$type."' where roll='".$rollnumber."' ";
		$result2=mysqli_query($conn,$update);
		if($result2)
		{
			echo "<script>alert('updated');location.href='?p=".base64_encode('students')."'</script>";
		}


	}
}
?>