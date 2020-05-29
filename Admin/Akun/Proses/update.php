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

	$id_admin = $_POST['id_admin'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../assets/images/akun/".$_FILES['gambar']['name']);

	$query = "UPDATE tb_admin SET nama_lengkap = '$nama_lengkap', email = '$email', no_hp = '$no_hp', tgl_lahir = '$tgl_lahir', gambar = '$gambar' WHERE id_admin = '$id_admin'";
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
			title: 'Maaf',
			text: 'Gagal memproses permintaan'
		}).then(function() {
			window.location.href='../index'
		});
		</script>";
	}
	?>
</body>
</html>