<?php 

//buat session
if (!isset($_SESSION)) {
	session_start();
}

if (empty($_SESSION['username'])) {
	header("location: login.php");
}

 ?>