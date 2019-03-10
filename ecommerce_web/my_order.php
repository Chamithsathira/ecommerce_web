<?php 
session_start();
$email = $_SESSION['email'];
$item_id = '';
$connection = mysqli_connect('localhost','root','','testing');

$query="SELECT * FROM cart WHERE user_id = '{$email}' ";
$result = mysqli_query($connection,$query);

if (mysqli_num_rows($result) > 0) {
	while ( $row = mysqli_fetch_assoc($result)) {
		
	
	
?>

	<fieldset style="width: 600px; margin: 20px; border-radius: 7px;">
		PRODUCT ID : 	<?php echo $row['p_id'] ; ?><br>
		PRODUCT NAME : 	<?php echo $row['p_name'] ; ?><br> 
		PRICE : 	<?php echo $row['price'] ; ?><br>
		<?php $item_id = $row['p_id']; ?>

		<form action="my_order.php" method="post">
			<a href=' <?php echo "remove.php?email=".$email."&p_id=".$item_id ?> ' style="text-decoration: none; background-color: #fcc508; border-radius: 5px">remove</a>
		</form>
	</fieldset>


<?php
}
}




 ?>



<form action="buy.php?buy=1" method="post" style="width: 100px; margin: 20px; border-radius: 7px">
 		<button type="submit" name="submit" style="border-radius: 7px">Buy now</button>
 	</form>
 
 <?php 

  ?>
 	
