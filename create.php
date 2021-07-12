<?php session_start();
	if (isset($_POST['submit'])) {
		require 'config.php';
		$insertOneResult = $collection->insertOne([ 'kelas' => $_POST['kelas'],
			'kodekelas' => $_POST['kodekelas'],
			'hari' => $_POST['hari'],
			'matkul' => $_POST['matkul'], 
			'sks' => $_POST['sks'],
			'kuota' => $_POST['kuota'],
 		]);
 		$_SESSION['succes'] = "Data kelas berhasil di tambahkan";
 		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD MongoDB</title>
	<link rel = "stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<center><h1>Tambah Data Kelas</h1></center>
		<form method="POST">
			<div class="form-group">
				<label for="kelas">
					<strong>Kelas: </strong>
				</label>
				<select name="kelas" id="kelas" class="form-control">
					<option value="Reguler">Reguler</option>
					<option value="Karyawan">Karyawan</option>
				</select>

				<label for="kodekelas">
					<strong>Kode-Kelas: </strong>
				</label>
				<select name="kodekelas" id="kodekelas" class="form-control">
					<option value="C1">C1</option>
					<option value="C2">C2</option>
					<option value="C3">C3</option>
					<option value="D1">D1</option>
					<option value="D2">D2</option>
				</select>

				<label for="hari">
					<strong>Hari: </strong>
				</label>
				<select name="hari" id="hari" class="form-control">
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="jumat">Jum'at</option>
					<option value="Sabtu">Sabtu</option>
					<option value="Minggu">Minggu</option>
				</select>

				<label for="matkul">
					<strong>Matkul: </strong>
				</label>
				<select name="matkul" id="matkul" class="form-control">
					<option value="Data Mining">Data Mining</option>
					<option value="CSP">CSP</option>
					<option value="Jarkom">Jarkom</option>
					<option value="Basis Data noSQL">Basis Data noSQL</option>
				</select>

				<label for="sks"><strong>SKS: </strong></label>
				<input type="text" class="form-control" name="sks" placeholder="1-99">

				<label for="kuota"><strong>Kuota: </strong></label>
				<input type="text" class="form-control" name="kuota" placeholder="1-99">

				<br>
				<button type="submit" name="submit" class="btn btn-success">Tambah</button>

				<button><a href="index.php" class="btn btn-primary">Kembali</a>

			</div>
		</form>
	</div>
</body>
</html>