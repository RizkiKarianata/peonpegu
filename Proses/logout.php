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
	setcookie("version", "", time() + (60 * 60 * 24 * 5), '/');
	echo "<script>
	localStorage.removeItem('id_user');
	localStorage.removeItem('username');
	localStorage.removeItem('nama');
	Swal.fire({
		allowEnterKey: false,
		allowOutsideClick: false,
		icon: 'success',
		title: 'Pemberitahuan',
		text: 'Semoga harimu menyenangkan'
	}).then(function() {
		window.location.href='../index'
	});
	</script>";
	?>
</body>
</html>