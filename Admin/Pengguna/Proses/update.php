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

	$id_user = $_POST['id_user'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$no_hp = $_POST['no_hp'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../assets/images/akun/".$_FILES['gambar']['name']);
	$modified = date("Y-m-d H:i:s");

	$query = "UPDATE tb_user SET nama_lengkap = '$nama_lengkap', username = '$username', email = '$email', tgl_lahir = '$tgl_lahir', no_hp = '$no_hp', gambar = '$gambar', modified = '$modified' WHERE id_user = '$id_user'";
	$exe = mysqli_query($conn, $query);

	if($exe) {
		echo "<script>
    		Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'success',
				title: 'Pemberitahuan',
				text: 'Berhasil mengubah data'
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
			text: 'Gagal mengubah data'
		}).then(function() {
			window.location.href='../detail-pengguna?id=$id_user';
		});
		</script>";
	}
	?>
</body>
</html>