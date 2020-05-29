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

	date_default_timezone_set('Asia/Jakarta');

	$nama_lengkap = $_POST['nama_lengkap'];
	$username = mysqli_escape_string($conn, $_POST['username']);
	$password = mysqli_escape_string($conn, $_POST['password']);
	$password_confirmation = mysqli_escape_string($conn, $_POST['password_confirmation']);
	$no_hp = $_POST['no_hp'];
	$created = date("Y-m-d H:i:s");
	$modified = date("Y-m-d H:i:s");

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'"));
	$cek2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_user WHERE no_hp = '$no_hp'"));

	$password_acak = password_hash($password_confirmation, PASSWORD_DEFAULT);

	if($cek > 0) {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Peringatan',
			text: 'Nama Pengguna sudah digunakan'
		}).then(function() {
			window.location.href='../halaman-daftar';
		});
		</script>";	
	}else if($cek2 > 0) {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Peringatan',
			text: 'Nomor Telepon sudah digunakan'
		}).then(function() {
			window.location.href='../halaman-daftar';
		});
		</script>";
	}else if($password!=$password_confirmation) {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Peringatan',
			text: 'Kata Sandi yang Anda masukkan tidak cocok'
		}).then(function() {
			window.location.href='../halaman-daftar';
		});
		</script>";
	}else {
		// $curl = curl_init();
		// curl_setopt_array($curl, array(
		// 	CURLOPT_URL => "https://api.thebigbox.id/sms-otp/1.0.0/otp/coImQLSevlqil9bsAKsGZzn3bqZFCe9q",
		// 	CURLOPT_RETURNTRANSFER => true,
		// 	CURLOPT_ENCODING => "",
		// 	CURLOPT_MAXREDIRS => 10,
		// 	CURLOPT_TIMEOUT => 30,
		// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		// 	CURLOPT_CUSTOMREQUEST => "PUT",
		// 	CURLOPT_POSTFIELDS => "{\n  \"maxAttempt\" : \"1\",\n  \"phoneNum\" : \"$no_hp\",\n  \"expireIn\" : \"300\",\n  \"digit\" : \"5\"\n\n}",
		// 	CURLOPT_HTTPHEADER => array(
		// 		"content-type: application/json",
		// 		"x-api-key: coImQLSevlqil9bsAKsGZzn3bqZFCe9q"
		// 	),
		// ));
		// $response = curl_exec($curl);
		// $err = curl_error($curl);
		// $response2 = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		// curl_close($curl);
		// if ($response2 == 200) {
		$query = "INSERT INTO tb_user(nama_lengkap, username, password, no_hp, created, modified) VALUES ('$nama_lengkap', '$username', '$password_acak', '$no_hp', '$created', '$modified')";
		$exe = mysqli_query($conn, $query);
		if($exe) {
			// setcookie('kodeotp', $status, time() + (60 * 60 * 5), '/');
			echo "<script>
			Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'success',
				title: 'Pemberitahuan',
				text: 'Berhasil melakukan pendaftaran'
			}).then(function() {
				window.location.href='../halaman-masuk'
			});
			</script>";
		}else {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Peringatan',
			text: 'Gagal melakukan pendaftaran'
		}).then(function() {
			window.location.href='../halaman-daftar';
		});
		</script>";		
		}
	// } else {
	// 	echo "<script>
	// 	Swal.fire({
	// 		icon: 'error',
	// 		title: 'Peringatan',
	// 		text: 'Gagal melakukan proses'
	// 	}).then(function() {
	// 		window.location.href='../halaman-daftar';
	// 	});
	// 	</script>";
	// }
}
	?>
</body>
</html>