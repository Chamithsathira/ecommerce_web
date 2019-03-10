<?php
session_start();
$email = $_SESSION['email'];
$connection = mysqli_connect('localhost','root','','testing');

if(isset($_GET['buy'])){
	$quer= "DELETE FROM cart WHERE user_id= '{$email}'";
	$result = mysqli_query($connection,$quer);
	header('location: cart.php');
}

?>