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


	$angka = range(0,9);
	shuffle($angka);
	$ambil_angka = array_rand($angka, 4);
	$angkastring = implode("", $ambil_angka);
	$kode = $angkastring;

	$id_user = $_POST['id_user'];
	$id_wisata = $_POST['id_wisata'];
	$jumlah_pesan = $_POST['jumlah_pesan'];
	$total_harga = $_POST['total_harga'];
	$status = 0;
	$created = date("Y-m-d H:i:s");
	$modified = date("Y-m-d H:i:s");

	$query = "INSERT INTO tb_transaksi(kode, id_user, id_wisata, jumlah_pesan, total_harga, status, created, modified) VALUES ('$kode', '$id_user', '$id_wisata', '$jumlah_pesan', '$total_harga', '$status', '$created', '$modified')";
	$exe = mysqli_query($conn, $query);

	if($exe) {
		setcookie('kode', $kode, time() + (60 * 60 * 24 * 1), '/');		
		setcookie('wisata', $id_wisata, time() + (60 * 60 * 24 * 1), '/');
		echo "<script>
    		Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'success',
				title: 'Pemberitahuan',
				text: 'Berhasil menambah data'
			}).then(function() {
				window.location.href='../verifikasi-pemesanan'
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
			window.location.href='../booking-wisata?id=$id_wisata';
		});
		</script>";
	}
	?>
</body>
</html>