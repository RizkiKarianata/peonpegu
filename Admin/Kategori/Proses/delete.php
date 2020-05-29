<?php
include '../../../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$query = "DELETE FROM tb_kategori WHERE id_kategori = '$id_kategori'";
$exe = mysqli_query($conn, $query);
?>