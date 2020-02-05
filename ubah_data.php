<?php
	//koneksi
require_once('koneksi.php');


//ambil data dari from
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];
$golongan=$_POST['golongan'];


//menampilkan data
$query="UPDATE tb_penduduk SET nama='$nama', gender='$gender',  alamat='$alamat',  status='$status', golongan='$golongan' WHERE nik = '$nik'";
$simpan=mysqli_query($conn,$query);

//script langsung pindah ke laman tampil data
header('location: tampil_data.php');

?>