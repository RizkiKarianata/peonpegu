<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="../../assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="../../assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../../assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
</head>
<body>
	<?php
	include '../../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');

	$id_user = $_POST['id_user'];
	$id_wisata = $_POST['id_wisata'];
	$pekerjaan = $_POST['pekerjaan'];
	$isi = $_POST['isi'];
	$created = date("Y-m-d H:i:s");
	$modified = date("Y-m-d H:i:s");

	$query = "INSERT INTO tb_testimoni(id_user, id_wisata, pekerjaan, isi, created, modified) VALUES ('$id_user', '$id_wisata', '$pekerjaan', '$isi', '$created', '$modified')";
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
				window.location.href='../detail-layanan?id=$id_wisata'
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
			window.location.href='../detail-layanan?id=$id_wisata';
		});
		</script>";
	}
	?>
</body>
</html>