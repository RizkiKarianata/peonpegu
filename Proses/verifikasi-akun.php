<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="../assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
</head>
<body>
	<?php
	include '../koneksi.php';
	$kode = $_POST['kode'];

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/cxxYAnfTepRbvbnuxphgCrE8lFDqI4MG/verifications",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{\n  \"maxAttempt\" : \"3\",\n  \"otpstr\" : \"$kode\",\n  \"expireIn\" : \"300\",\n  \"digit\" : \"5\"\n\n}",
		CURLOPT_HTTPHEADER => array(
    		"content-type: application/json",
    		"x-api-key: cxxYAnfTepRbvbnuxphgCrE8lFDqI4MG"
		),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	$response2 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);

	if($response2 == 200) {
		echo "<script>
		Swal.fire({
			icon: 'success',
			title: 'Pemberitahuan',
			text: 'Berhasil'
		}).then(function() {
			window.location.href='../ubah-katasandi'
		});
		</script>";
	}else {
		echo "<script>
		Swal.fire({
			icon: 'error',
			title: 'Peringatan',
			text: 'Kode OTP yang Anda masukkan salah'
		}).then(function() {
			window.location.href='../verifikasi-akun';
		});
		</script>";
	}
	?>
</body>
</html>