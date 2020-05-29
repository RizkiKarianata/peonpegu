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

	$id_berita = $_POST['id_berita'];
	$judul = $_POST['judul'];
	$keterangan = $_POST['keterangan'];
	$ket_singkat = $_POST['ket_singkat'];
	$ket_lengkap = $_POST['ket_lengkap'];
	$quotes = $_POST['quotes'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../assets/images/berita/".$_FILES['gambar']['name']);
	$modified = date("Y-m-d H:i:s");

	$query = "UPDATE tb_berita SET judul = '$judul', keterangan = '$keterangan', ket_singkat = '$ket_singkat', ket_lengkap = '$ket_lengkap', quotes = '$quotes', gambar = '$gambar', modified = '$modified' WHERE id_berita = '$id_berita'";
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
			window.location.href='../detail-berita?id=$id_berita';
		});
		</script>";
	}
	?>
</body>
</html>