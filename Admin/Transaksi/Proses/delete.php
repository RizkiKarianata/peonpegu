<?php
include '../../../koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$query = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'";
$exe = mysqli_query($conn, $query);
?>