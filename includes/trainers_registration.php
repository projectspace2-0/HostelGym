<?php
include("config.php");

?>

<html>
<head>
	<title>Trainers Registration | Gym</title></head></html>

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
			height:800px;
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
							<u><h1>REGISTRATION FORM</h1><br><br></u>
						</div>
					</div>

					<div class="row">
						<div class="col-md-offset-3 col-md-2">
							<label>Roll No:</label>

						</div>

						<div class="col-md-4">
							<input class="form-control " type="text" name="roll" id="roll"  placeholder="Enter Roll Number" required />
						</div>
					</div>
					<br><br>
					<div class="row">

						
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
			</div>
			<br><br>
			<div class="row">

				<div class="col-md-offset-3 col-md-2 ">
					<label>User Type:</label>
				</div>
				<div class="col-md-4">
					<input type="text" class="form-control" name="user_type" value="faculty" readonly>
						
						
					
				</div>
			</div>
		
			
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
	// $branch=$_POST['branch'];
	// $college=$_POST['college'];
	// $year=$_POST['year'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$room=$_POST['room'];
	// $start=$_POST['startday'];
	// $expiry=$_POST['Expiryday'];
	$type='2';
	$user_type=$_POST['user_type'];
	// $fee=$_POST['fee'];

	$select="select * from students where roll='$rollno'";

	$res_select=mysqli_query($conn,$select);
	$rc=mysqli_num_rows($res_select);
	
	
	if ($rc==0)
	{
		


		$insert="insert into students(`roll`,`name`,`contact`,`gender`,`room`,`type`,`user_type`)
		values('$rollno','$name','$phone','$gender','$room','$type','$user_type')";
		$res_insert=mysqli_query($conn,$insert);
		if($res_insert)
		{
			echo"<script> alert('insertsuccess');</script>";
			echo "<script> location.href='?p=".base64_encode('trainers')."' </script>";
			
		}
		else
		{
			echo"<script> alert('invalid ');</script>";
			echo "<script> location.href='?p=".base64_encode('trainers_registration')."' </script>";
		}
		


		
	}
	else{
		echo"<script> alert('user already registered ');</script>";
		echo "<script> location.href='?p=".base64_encode('trainers')."' </script>";
	}

}	 
?>
