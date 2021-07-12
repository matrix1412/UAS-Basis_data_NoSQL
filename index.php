<?php session_start(); ?>
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
		<center><h1>Data Matkul Institut ASIA Malang</h1></center>
		<a href="create.php" class="btn btn-success">Tambah</a>
		<?php
		 if (isset($_SESSION['succes'])) {
		 	echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
		 }
		?>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Kelas</th>
					<th style="background-color: #FF0000;" scope="col">Kode-Kelas</th>
					<th style="background-color: #FFA500;" scope="col">Hari</th>
					<th style="background-color: #808080;">Matkul</th>
					<th style="background-color: green;" scope="col">SKS</th>
					<th style="background-color: #FFFF00;" scope="col">Kuota</th>
				</tr>
			</thead>

			<?php 
				require 'config.php';
				$kelas = $collection->find();
				foreach ($kelas as $ks) {
					echo "<tr>";
					echo "<th scope='row'>".$ks->kelas."</th>";
					echo "<td>".$ks->kodekelas."</td>";
					echo "<td>".$ks->hari."</td>";
					echo "<td>".$ks->matkul."</td>";
					echo "<td>".$ks->sks."</td>";
					echo "<td>".$ks->kuota."</td>";
					echo "<td>";
					echo "<a href = 'edit.php?id=".$ks->_id."'class='btn btn-primary'>EDIT</a>";
					echo "<a href = 'hapus.php?id=".$ks->_id."'class='btn btn-danger'>HAPUS</a>";
					echo "</td>";
					echo "</tr>";
				}
			?>
	</div>
</body>
</html>