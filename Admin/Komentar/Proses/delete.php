<?php
include '../../../koneksi.php';

$id_komentar = $_POST['id_komentar'];
$query = "DELETE FROM tb_komentar WHERE id_komentar = '$id_komentar'";
$exe = mysqli_query($conn, $query);
?>