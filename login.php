<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/framework7.material.min.css"> -->
	<link rel="stylesheet" href="css/framework7-icons.css">
	<title>Login</title>
</head>
<body style="background: #D8B7D5 ">
	<div class="isidata" style="background: url(3.jpg);">
	<center>
<form method="post" action="aksi_login.php">
	<h1>Halaman Login</h1>
	<table>
		<tr>
			<td>Username</td>
			<td></td>
			<td><input type="text" name="username" class="form-control" required="required"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input type="password" name="password" class="form-control" required="required"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" class="btn btn-outline-primary">Login</button><button type="reset" class="btn btn-outline-danger">Batal</button></td>
			
		</tr>
	</table>
</form>
</center>
	
</div>
</body>
</html>