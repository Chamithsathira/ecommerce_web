<?php 
session_start();
$_SESSION = array();
if (isset($_COOKIES[session_name()])) {
	setcookie(session_name(),'',time()-86400,'/');
}
session_destroy();

echo '<script>alert("Successfully Logout")</script>';
header('Location: index.php?logout=yes');


 ?>