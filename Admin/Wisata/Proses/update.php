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

	$id_wisata = $_POST['id_wisata'];
	$id_kategori = $_POST['id_kategori'];
	$nama_wisata = $_POST['nama_wisata'];
	$alamat = $_POST['alamat'];
	$ket_singkat = $_POST['ket_singkat'];
	$ket_lengkap = $_POST['ket_lengkap'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$gambar = $_FILES['gambar']['name'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../../../assets/images/gunung/".$_FILES['gambar']['name']);
	$modified = date("Y-m-d H:i:s");

	$query = "UPDATE tb_wisata SET id_kategori = '$id_kategori', nama_wisata = '$nama_wisata', alamat = '$alamat', ket_singkat = '$ket_singkat', ket_lengkap = '$ket_lengkap', harga = '$harga', stok = '$stok', gambar = '$gambar', modified = '$modified' WHERE id_wisata = '$id_wisata'";
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
			window.location.href='../detail-kategori?id=$id_kategori';
		});
		</script>";
	}
	?>
</body>
</html>