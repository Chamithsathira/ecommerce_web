<?php 
session_start();
$connection = mysqli_connect('localhost','root','','testing');

$email='';
$password = '';
$user_id='';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashed_password = sha1($password);
	$query = "SELECT * FROM user WHERE email='{$email}' AND password='{$hashed_password}' LIMIT 1  ";
	$result = mysqli_query($connection,$query);
	if (mysqli_num_rows($result)==1) {
		$user = mysqli_fetch_assoc($result);
		$_SESSION['f_name']=$user['f_name'];
		$_SESSION['id']= $user['id'];
		$_SESSION['email'] = $user['email'];
		

		
		header('Location: cart.php');

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
				<span><h3>User Login</h3></span>
			</div>
			<div class="logform">
				<form action="login.php" method="POST" >
					<p>
							<label>User Name     </label>
							<input type="text" name="email">
					</p>
					<p>
							<label>Password      </label>
							<input type="password" name="password">
					</p>
					<p>
							<label></label>
							<input type="submit" name="submit" class="btn" value="Login" style="width: 200px; height: 40px; border-radius: 7px;9">
					</p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>