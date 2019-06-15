<?php
include("config.php");

?>

<html>
<head>
	<title>Registration | Gym</title>
	<!--fontawesome symbols-->
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
	<link rel="stylesheet" href="css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->

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
							<center><u><h1>REGISTRATION FORM</h1></center><br><br></u>
						</div>
					</div>

					<div class="row">
						<div class="col-md-offset-3 col-md-2">
							<label>Roll No:</label>

						</div>

						<div class="col-md-4">
							<input class="form-control " type="text" name="roll" id="roll"  placeholder="Enter Roll Number" required />
						</div>

						
						<div class="col-md-offset-3 col-md-2">
							<label>Name:</label>
						</div>
						<div class="col-md-4">
							<input class="form-control"  type="text" name="name" id="name" placeholder="Enter Name" required />
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
							<option value="AEC" >AEC</option>
							<option value="ACET">ACET</option>
							<option value="ACE"  >ACOE</option>
							<option value="APTC" >APTC</option>
							<option value="APC"  >APC</option>
							<option value="ACP">ACP</option>
							<option value="AGBS"  >AGBS</option>
							<option value="AFSC" >AFSC</option>
							<option value="BPED"  >BPED</option>
							<option value="OTHERS"  >OTHERS</option>



						</select>
					</div>
					<div class="col-md-offset-3 col-md-2">
						<label>Branch:</label>
					</div>
					<div class="col-md-4">
						<select class="form-control" id="branch" name="branch" required>
							<option value="">--select Branch--</option>
							<option value="CSE" >CSE</option>
							<option value="ECE" >ECE</option>
							<option value="IT" >IT</option>
							<option value="EEE" >EEE</option>
							<option value="MECH" >MECH</option>
							<option value="CIVIL" >CIVIL</option>
							<option value="PHARMA-D" >PHARM-D</option>
							<option value="PHARMACY" >PHARMACY</option>
							<option value="BBA">BBA</option>
							<option value="MBA">MBA</option>
							<option value="FORENSIC">FORENSIC</option>


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
							<option value=1  >1</option>
							<option value=2 >2</option>
							<option value=3 >3</option>
							<option value=4  >4</option>
						</select>
					</div>
					
					<div class="col-md-offset-3 col-md-2 ">
						<label>Phone:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control"  type="text" name="phone" id="phone" placeholder="Phone Number" required />
					</div>
				</div>
				<br>
				<br>
			
			<div class="row">
				<div class="col-md-offset-3 col-md-2">
					<label>Room:</label>
				</div>
				<div class="col-md-4">
					<input class="form-control"  type="text" name="room" id="room" placeholder="Enter Room Number" required />
				</div>
				<div class="col-md-offset-3 col-md-2 ">
					<label>Type:</label>
				</div>
				<div class="col-md-4">
					<select class="form-control" id="type" name="type" required>
						<option value="">--Select Type --</option>
						<option value=1  >Ordinary</option>
						<option value=2 >Special</option>
						
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
						<input  type="radio" value="Male" name="gender" id="gender" >Male
					</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label class="radio-inline" >
						<input type="radio" value="Female" name="gender" id="gender" >Female
					</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label class="radio-inline" >
						<input type="radio" value="Others" name="gender" id="gender">Others
					</label>	
				</div>
			</div>
			
			<?php
			$year=date('Y');
			$month= date('m');
			$expire=$month+1;
			$expiredate=($year.'-'.$expire.'-01');
			$date = date('Y-m-d');
	// 		if ($date>=$expiredate) {

	// 			$update="UPDATE  students SET status=0 where roll='$rollno'";

	// $res_update=mysqli_query($conn,$update);
	// $rc=mysqli_num_rows($res_update);
	// 		}
			?>
			<br>
			<div class="row" >
				<div class=" col-md-offset-3 col-md-2 form-group">
					<label>Start Date:</label>
				</div>
				<div class="col-md-4 form-group" required>
					
					<input class="form-control" type="text" name="startday" value="<?php echo $date ?>" readonly>
				</div>
			
				<div class=" col-md-offset-3 col-md-2 form-group">
					<label>Expiry Date:</label>
				</div>
				<div class="col-md-4 form-group" required>
					
					<input class="form-control"  type="text" name="Expiryday" value="<?php echo $expiredate ?>" readonly>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-offset-3 col-md-2 ">
					<label>Fee (Rs/-):</label>
				</div>
				<div class="col-md-4">
					<input class="form-control"  type="text" name="fee" id="fee" value="350" readonly 	>
				</div>
			</div>
			<br><br>






			<div class="row">
				<div class="col-md-offset-3 col-md-3 form-group">
					<input class="form-control btn btn-success" value="REGISTER" type="submit" 
					name="register" id="register"> 
				</div>
			</div><br><br><br><br>
		</form>
	</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['register']))
{
	// $server="localhost";
	// $username="root";
	// $password="";
	// $dbname="gym";
	// $conn=mysqli_connect($server,$username,$password,$dbname);
	
// print_r($_POST);
	


	$rollno=$_POST['roll'];
	$name=$_POST['name'];
	$branch=$_POST['branch'];
	$college=$_POST['college'];
	$year=$_POST['year'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$room=$_POST['room'];
	$start=$_POST['startday'];
	$expiry=$_POST['Expiryday'];
	$type=$_POST['type'];
	$fee=$_POST['fee'];

	$select="select * from students where roll='$rollno'";

	$res_select=mysqli_query($conn,$select);
	$rc=mysqli_num_rows($res_select);
	
	
	if ($rc==0)
	{
		


		$insert="insert into students(`roll`,`name`,`branch`,`college`,`year`,`contact`,`gender`,`room`,`type`,`startday`,`expiry`,`fee`)
		values('$rollno','$name','$branch','$college','$year','$phone','$gender','$room','$type','$start','$expiry','$fee')";
		$res_insert=mysqli_query($conn,$insert);
		if($res_insert)
		{
			echo"<script> alert('insertsuccess');</script>";
			echo "<script> location.href='?p=".base64_encode('registration')."' </script>";
			
		}
		else
		{
			echo"<script> alert('invalid ');</script>";
			echo "<script> location.href='?p=".base64_encode('registration')."' </script>";
		}
		


		
	}
	else{
		echo"<script> alert('user already registered ');</script>";
		echo "<script> location.href='?p=".base64_encode('registration')."' </script>";
	}

}	 
?>
