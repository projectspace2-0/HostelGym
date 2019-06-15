
<?php
session_start();

include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Gym</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- Custom Theme files -->
	<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	

</head>
<body>

	<!-- main -->
	<div class="main"> 
		<div class="bg-layer">
			<h1> Login form</h1>
			<div class="header-main">
				<div class="main-icon">
					<span><img src="images/logo.png" width=40%   height="40%" style="border-radius:50%"></span>
					<br><br><br>
				</div>
				<div class="header-left-bottom">
					<form action="#" method="post">
						<div class="icon1">
							<span class="fa fa-user"></span>
							<input type="text" name="username" id="username" placeholder="User Id" required="" autofocus />
						</div>
						<div class="icon1">
							<span class="fa fa-lock"></span>
							<input type="password" name="password"  id="password" placeholder="Password" required=""/>
						</div>

						<div class="form-group bottom">
							<button type="submit" name="submit" class="btn">Log In</button>
							
						</div>
						
					</form>	
				</div>
			</div>

			<!-- copyright -->
			<div class="copyright">
				<p>© 2019 Project Space | <a href="https://www.technicalhub.io" target="_blank">Technical Hub</a></p>
			</div>
			<!-- //copyright --> 
		</div>
	</div>	
	<!-- //main -->

</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gym";
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	$user=mysqli_real_escape_string($conn,$_POST['username']);
	$pass=mysqli_real_escape_string($conn,$_POST['password']);
	$select="select *from admin where username='$user' and password='$pass'";
	$res=mysqli_query($conn,$select);
	$fetch=mysqli_fetch_array($res);
	$rc=mysqli_num_rows($res);
	
	if($rc==1)
	{
		if ($user==$fetch['username'] && $pass==$fetch['password'])
		{

		$_SESSION['username']=$username;
		$_SESSION['id']=$user;
		echo"<script> alert('login success');</script>";
		echo "<script> location.href='dashboard.php' </script>";
		}

	else
	{
		echo"<script> alert('invalid login');</script>";
		echo "<script> location.href='index.php' </script>";
	}

	}
	else
	{
		echo"<script> alert('invalid login');</script>";
		echo "<script> location.href='index.php' </script>";
	}


}


?>
