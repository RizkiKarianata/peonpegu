<?php
include '../../../koneksi.php';

$id_berita = $_POST['id_berita'];
$query = "DELETE FROM tb_berita WHERE id_berita = '$id_berita'";
$exe = mysqli_query($conn, $query);
?>