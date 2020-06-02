<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../assets/plugins/sweet-alert2/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="../assets/plugins/sweet-alert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="../assets/plugins/sweet-alert2/dist/sweetalert2.min.css">
</head>
<body>
	<?php 
	include '../koneksi.php';
	$no_hp = $_POST['no_hp'];
	$username = $_POST['username'];

	$query = "SELECT * FROM tb_user WHERE no_hp = '$no_hp' AND username = '$username'";
	$exe = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($exe);
	$cek = mysqli_num_rows($exe);

	if($cek > 0) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/cxxYAnfTepRbvbnuxphgCrE8lFDqI4MG",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "PUT",
			CURLOPT_POSTFIELDS => "{\n  \"maxAttempt\" : \"3\",\n  \"phoneNum\" : \"$no_hp\",\n  \"expireIn\" : \"300\",\n  \"digit\" : \"5\"\n\n}",
			CURLOPT_HTTPHEADER => array(
				"content-type: application/json",
				"x-api-key: cxxYAnfTepRbvbnuxphgCrE8lFDqI4MG"
			),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		$response2 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		if ($response2 == 200) {
			setcookie('chrome', base64_encode($row['id_user']), time() + (60 * 60 * 24 * 1), '/');
			echo "<script>
			Swal.fire({
				icon: 'success',
				title: 'Pemberitahuan',
				text: 'Data ditemukan'
			}).then(function() {
				window.location.href='../verifikasi-akun'
			});
			</script>";
		}else {
			echo "<script>
			Swal.fire({
				icon: 'error',
				title: 'Peringatan',
				text: 'Gagal memproses permintaan'
			}).then(function() {
				window.location.href='../lupa-katasandi';
			});
    		</script>";			
		}
	}else{
		echo "<script>
		Swal.fire({
			icon: 'error',
			title: 'Peringatan',
			text: 'Data tidak ditemukan'
		}).then(function() {
			window.location.href='../lupa-katasandi';
		});
    	</script>";
  	}
	?>
</body>
</html>