<?php

//memanggil file koneksi
require_once('koneksi.php');
require_once('keamanan.php');
// include('koneksi.php')

$query="SELECT * FROM tb_penduduk";
$dita=mysqli_query($conn,$query);


?>

<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/framework7-icons.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	 <div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler text-primary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation p-3 mb-2 bg-white text-dark"  >
    <span class="navbar-brand mb-0 h1" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b>Menu</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item bg-light text-primary" href="logout.php"><b>Keluar</b></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  </div>

	<title>Data Penduduk</title>
</head>
<body style="background: #D3A1D6">
<center>
	<div class="tampilku">
	<h1>Data Kependudukan</h1>

	<table border="0" class="table table-striped">
		<tr class="table-secondary">
			<th>NIK</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Golongan</th>
			<th>Keterangan</th>
		</tr>

		<?php
			while ($row=mysqli_fetch_assoc($dita)) {
				
		?>
		
		<tr>
			<td><?php echo $row['nik'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['gender'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['golongan'];?></td>
			<td>
				<a href="edit_data.php?nik=<?php echo $row['nik'];?>">Edit</a> |
				<a href="hapus_data.php?nik=<?php echo $row['nik'];?>" onclick="return confirm('Yakin nih mau dihapus???')">Delete</a>
			</td>
				
		</tr>

		<?php
			}
		?>

	</table>
</div>
<div class="isidata"  style="background: #EBF5FB box-shadow: 0px 10px 20px 0px #F7DC6F">
<h1>Input Data</h1>

<form method="post" action="simpan_data.php">

<table border="0">
	<tr>
		<td>NIK </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nik" required="required"></td>
	</tr>
	<tr>
		<td>Nama </td>
		<td> </td>
		<td><input type="text" class="form-control" name="nama" required="required"></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td> </td>
		<td> <input type="radio" value="L" name="gender" required="required" >Laki-laki
<input type="radio" value="P" name="gender" required="required" >Perempuan</td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td> </td>
		<td><textarea name="alamat" class="form-control" required="required" ></textarea></td>
	</tr>
	<tr>
		<td>Status </td>
		<td> </td>
		<td><input type="text" class="form-control" name="status" required="required"></td>
	</tr>
	<tr>
		<td>Golongan </td>
		<td> </td>
		<td> <input type="radio" value="WNI" name="golongan" required="required" >WNI
<input type="radio" value="WNA" name="golongan" required="required" >WNA</td>
	</tr>
	<tr>
		<td><button type="submit" class="btn btn-outline-secondary"><i class = "material-icons">bookmark</i>Save</button></td>
		<td> </td>
		<td><button type="reset" class="btn btn-outline-warning"><i class = "material-icons">delete</i>Delete</button></td>
	</tr>
</table>

</form>
</div>
</center>


</body>
</html>
