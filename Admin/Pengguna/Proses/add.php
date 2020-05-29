<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="../../../assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="../../../assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../../../assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
</head>
<body>
	<?php
	include '../../../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');

	$nama_lengkap = $_POST['nama_lengkap'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$no_hp = $_POST['no_hp'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../assets/images/akun/".$_FILES['gambar']['name']);
	$created = date("Y-m-d H:i:s");
	$modified = date("Y-m-d H:i:s");

	$password_acak = password_hash($password, PASSWORD_DEFAULT);

	$query = "INSERT INTO tb_user(nama_lengkap, username, password, email, tgl_lahir, no_hp, gambar, created, modified) VALUES ('$nama_lengkap', '$username', '$password_acak', '$email', '$tgl_lahir', '$no_hp', '$gambar', '$created', '$modified')";
	$exe = mysqli_query($conn, $query);

	if($exe) {
		echo "<script>
    		Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'success',
				title: 'Pemberitahuan',
				text: 'Berhasil menambah data'
			}).then(function() {
				window.location.href='../index'
			});
		</script>";
	}else {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Peringatan',
			text: 'Gagal menambah data'
		}).then(function() {
			window.location.href='../tambah-pengguna';
		});
		</script>";
	}
	?>
</body>
</html>