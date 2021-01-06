<?php
ob_start();
if(!isset($_SESSION)) 
{ 
		session_start(); 
} 

$con = mysqli_connect("server48.romania-webhosting.com", "mlfix_marian", "info_2020_shop","mlfix_camin");

if (mysqli_connect_errno()) {
	echo  'connect faild' . mysqli_connect_errno();
}

?>

