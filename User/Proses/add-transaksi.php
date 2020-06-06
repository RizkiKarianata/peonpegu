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
	$no_hp = $_POST['no_hp'];
	$status = 0;
	$created = date("Y-m-d H:i:s");
	$modified = date("Y-m-d H:i:s");

	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/kdq53gtlQV2QD00FdzxIN2D0MerZUyDH",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "PUT",
		CURLOPT_POSTFIELDS => "{\n  \"maxAttempt\" : \"3\",\n  \"phoneNum\" : \"$no_hp\",\n  \"expireIn\" : \"300\",\n  \"digit\" : \"5\"\n\n}",
		CURLOPT_HTTPHEADER => array(
			"content-type: application/json",
			"x-api-key: kdq53gtlQV2QD00FdzxIN2D0MerZUyDH"
		),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	$response2 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	if ($response2 == 200) {
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