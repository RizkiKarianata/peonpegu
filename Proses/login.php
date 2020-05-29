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
	
	$level = $_POST['level'];
	$username = mysqli_escape_string($conn, $_POST['username']);
	$password = mysqli_escape_string($conn, $_POST['password']);

	if($level == 'Admin') {
		$query = mysqli_query($conn,"SELECT * FROM tb_admin WHERE BINARY username = '$username'");
		$data = mysqli_fetch_array($query);
		$nama = $data['nama_lengkap'];
		$id_admin = $data['id_admin'];
		$username1 = $data['username'];

		$cek = mysqli_num_rows($query);

		if(password_verify($password, $data['password'])) {
			if($cek > 0) {
				setcookie('version', $id_admin, time() + (60 * 60 * 24 * 5), '/');
				echo "<script>
				localStorage.setItem('id_user', '$id_admin');
				localStorage.setItem('nama', '$nama');
				localStorage.setItem('username', '$username1'); 
				Swal.fire({
					allowEnterKey: false,
					allowOutsideClick: false,
					icon: 'success',
					title: 'Pemberitahuan',
				text: 'Selamat datang '+'$username1'
				}).then(function() {
					window.location.href='../Admin/index'
				});
				</script>";
			} else {
				echo "<script>
				Swal.fire({
					allowEnterKey: false,
					allowOutsideClick: false,
					icon: 'error',
					title: 'Maaf',
					text: 'Nama pengguna serta kata sandi yang Anda masukkan tidak cocok!'
				}).then(function() {
					window.location.href='../halaman-masuk'
				});
				</script>";
			}
		} else {
			echo "<script>
			Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'error',
				title: 'Maaf',
				text: 'Nama pengguna serta kata sandi yang Anda masukkan tidak cocok!'
			}).then(function() {
				window.location.href='../halaman-masuk'
			});
			</script>";
		}
	} else if($level == 'User') {
		$query = mysqli_query($conn,"SELECT * FROM tb_user WHERE BINARY username = '$username'");
		$data = mysqli_fetch_array($query);
		$nama = $data['nama_lengkap'];
		$id_user = $data['id_user'];
		$username1 = $data['username'];

		$cek = mysqli_num_rows($query);

		if(password_verify($password, $data['password'])) {
			if($cek > 0) {
				setcookie('version', $id_user, time() + (60 * 60 * 24 * 5), '/');
				echo "<script>
				localStorage.setItem('id_user', '$id_user');
				localStorage.setItem('nama', '$nama');
				localStorage.setItem('username', '$username1'); 
				Swal.fire({
					allowEnterKey: false,
					allowOutsideClick: false,
					icon: 'success',
					title: 'Pemberitahuan',
					text: 'Selamat datang '+'$username1'
				}).then(function() {
					window.location.href='../User/index'
				});
				</script>";
			} else {
				echo "<script>
				Swal.fire({
					allowEnterKey: false,
					allowOutsideClick: false,
					icon: 'error',
					title: 'Maaf',
					text: 'Nama pengguna serta kata sandi yang Anda masukkan tidak cocok!'
				}).then(function() {
					window.location.href='../halaman-masuk'
				});
				</script>";
			}
		}else {
			echo "<script>
			Swal.fire({
				allowEnterKey: false,
				allowOutsideClick: false,
				icon: 'error',
				title: 'Maaf',
				text: 'Nama pengguna serta kata sandi yang Anda masukkan tidak cocok!'
			}).then(function() {
				window.location.href='../halaman-masuk'
			});
			</script>";
		}
	} else {
		echo "<script>
		Swal.fire({
			allowEnterKey: false,
			allowOutsideClick: false,
			icon: 'error',
			title: 'Maaf',
			text: 'Nama pengguna serta kata sandi yang Anda masukkan tidak cocok!'
		}).then(function() {
			window.location.href='../halaman-masuk'
		});
		</script>";		
	}
	?>
</body>
</html>