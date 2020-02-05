<?php 
//akukan koneksi
require_once('koneksi.php');

// buat session
if (!isset($_SESSION)) {
	session_start();
}

//ambil data dari form
$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);

//cek berapa jumlah data yang ada
$login=mysqli_num_rows($data);

if($login > 0){
	// echo "selamat datang";
	$_SESSION['username']=$username;
	header('location: tampil_data.php');
}else{
	// echo "Maaf login gagal";
	header('location: login.php');
}

//ambil data dari form
// $username=htmlentities($_POST['username']);
// $password=htmlentities($_POST['password']);

// $query="SELECT * FROM tb_admin WHERE username='divisi'";
// $data=mysqli_query($conn,$query);

// //cek berapa jumlah data yang ada
// $login=mysqli_num_rows($data);

// if($login > 0){
// 	// echo "selamat datang";
// 	$_SESSION['divisi']=$username;
// 	header('location: tampil_divisi.php');
// }else{
// 	// echo "Maaf login gagal";
// 	header('location: login.php');
// }

 ?>