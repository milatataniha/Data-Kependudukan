<?php
	//koneksi
require_once('koneksi.php');
require_once('keamanan.php');

$nik=$_GET['nik'];

// echo $id;
$query="SELECT * FROM tb_penduduk WHERE nik = '$nik'";
$data=mysqli_query($conn,$query);

//menampung hasil
$row=mysqli_fetch_assoc($data);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
<body style="background: #D3A1D6">

	<center>
<div class="isidata">
<h1>Ubah Data</h1>


<form method="post" action="ubah_data.php">

<table border="0" >   
	<tr>
		<td>NIK </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nik" required="required" value="<?php echo $row['nik'];?>"></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nama" required="required" value="<?php echo $row['nama'];?>"></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td> </td>
		<td> <input type="radio" value="L" <?php if (!strcmp($row['gender'], "L")) {echo "CHECKED";
			# code...
		};?> name="gender" required="required">Laki-laki
<input type="radio" value="P" <?php if (!strcmp($row['gender'], "P")) {echo "CHECKED";
			# code...
		};?> name="gender" required="required">Perempuan</td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td> </td>
		<td><textarea class="form-control" name="alamat"> <?php echo $row['alamat'];?></textarea></td>
	</tr>
	<tr>
		<td>Status </td>
		<td> </td>
		<td><input type="text" class="form-control" name="status" required="required" value="<?php echo $row['status'];?>"></td>
	</tr>
	<tr>
		<td>Golongan </td>
		<td> </td>
		<td> <input type="radio" value="WNI" <?php if (!strcmp($row['golongan'], "WNI")) {echo "CHECKED";
			# code...
		};?> name="golongan" required="required">WNI
<input type="radio" value="WNA" <?php if (!strcmp($row['golongan'], "WNA")) {echo "CHECKED";
			# code...
		};?> name="golongan" required="required">WNA</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><button type="submit" class="btn btn-outline-secondary">Save</button></td>
	</tr>
</table>

</form>

</div>
</center>

</body>
</html>


