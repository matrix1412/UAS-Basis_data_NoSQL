<?php session_start();
	require 'config.php';
	if (isset($_GET['id'])) {
		$ks = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
	}
	if (isset($_POST['submit'])) {
		require 'config.php';
		$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
		$_SESSION['success'] = "Data kelas berhasil dihapus";
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD MongoDB</title>
	<link rel="stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br><center><h1>Hapus data kelas</h1></center>
		<h3> Kode kelas <?php echo "$ks->kodekelas"; ?> dengan kelas <?php echo "$ks->kelas"; ?> ? </h3>
		<form method="POST">
			<div class="form-group">
				<input type="hidden" value="<?php
				echo "$ks->kelas"; ?>" class="form-control" name="kelas">
				<a href="index.php" class="btn btn-primary">Kembali</a>
				<button type="submit" name="submit" class="btn btn-danger">Hapus</button>
			</div>
		</form>
	</div>
</body>
</html>