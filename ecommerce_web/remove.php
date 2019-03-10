<?php 
session_start();


$connection = mysqli_connect('localhost','root','','testing');

$email = $_GET['email'];
$p_id = $_GET['p_id'];

$query = "DELETE FROM cart WHERE user_id= '{$email}' AND p_id={$p_id}";
$result = mysqli_query($connection,$query);
header('location: my_order.php');


 ?>