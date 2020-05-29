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

	$id_transaksi = $_POST['id_transaksi'];
	$status = $_POST['status'];
	$modified = date("Y-m-d H:i:s");

	$query = "UPDATE tb_transaksi SET status = '$status', modified = '$modified' WHERE id_transaksi = '$id_transaksi'";
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
			window.location.href='../detail-transaksi?id=$id_transaksi';
		});
		</script>";
	}
	?>
</body>
</html>