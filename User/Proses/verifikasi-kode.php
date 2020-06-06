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

	$kode = $_POST['kode'];
	$kode_trx = $_COOKIE['kode'];
	$modified = date("Y-m-d H:i:s");

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/kdq53gtlQV2QD00FdzxIN2D0MerZUyDH/verifications",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{\n  \"maxAttempt\" : \"3\",\n  \"otpstr\" : \"$kode\",\n  \"expireIn\" : \"300\",\n  \"digit\" : \"5\"\n\n}",
		CURLOPT_HTTPHEADER => array(
    		"content-type: application/json",
    		"x-api-key: kdq53gtlQV2QD00FdzxIN2D0MerZUyDH"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	$response2 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	if($response2 == 200) {
		$query = "UPDATE tb_transaksi SET status = '1', modified = '$modified' WHERE kode = '$kode_trx'";
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
					window.location.href='../akun'
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
				window.location.href='../verifikasi-pemesanan';
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
			window.location.href='../verifikasi-pemesanan';
		});
		</script>";		
	}
	?>
</body>
</html>