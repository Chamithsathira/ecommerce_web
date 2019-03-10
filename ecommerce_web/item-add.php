<?php 
session_start();

if (isset($_GET['item'])) {
	$item_id = $_GET['item'];
$product_id=$item_id;
$p_name='';
$price='';
$user_id=$_SESSION['email'];
echo $user_id;


$connection = mysqli_connect('localhost','root','','testing');
$query = "SELECT * FROM product WHERE product_id = $item_id ";
$result = mysqli_query($connection,$query);
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$p_name = $row['p_name'];
	$price = $row['price'];
	
	$query = "INSERT INTO cart (user_id,p_id,p_name,price) VALUES ('{$user_id}','{$product_id}','{$p_name}','{$price}' )  ";
	$res = mysqli_query($connection,$query);
	if ($res) {
		header('Location: cart.php');
	}

}

}

 ?>