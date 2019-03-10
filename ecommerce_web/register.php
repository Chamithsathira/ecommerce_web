<?php 
session_start();
$connection = mysqli_connect('localhost','root','','testing');

$f_name='';
$l_name='';
$email='';
$password = '';


if (isset($_POST['submit'])) {
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashed_password = sha1($password);
	$query = "INSERT INTO user (f_name,l_name,email,password) VALUES('$f_name','$l_name','$email','$hashed_password')";
	$result = mysqli_query($connection,$query);
	if ($result) {
		
		
		header('Location: index.php');

	}else{
		echo "invalid";
	}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>

	<div class="main">
		<div class="container">
			<div class="title_a">
				<span><h3>User Register</h3></span>
			</div>
			<div class="logform">
				<form action="register.php" method="POST" >
					<p>
							<label>First Name     </label>
							<input type="text" name="f_name" required="">
					</p>
					<p>
							<label>Last Name     </label>
							<input type="text" name="l_name" required="">
					</p>
					<p>
							<label>E-mail     </label>
							<input type="text" name="email" required="">
					</p>
					<p>
							<label>Password      </label>
							<input type="password" name="password" required=""> 
					</p>
					<p>
							<label></label>
							<input type="submit" name="submit" value="Register" style="width: 200px; height:40px; border-radius: 7px" >
					</p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>