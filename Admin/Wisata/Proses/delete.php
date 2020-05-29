<?php
include '../../../koneksi.php';

$id_wisata = $_POST['id_wisata'];
$query = "DELETE FROM tb_wisata WHERE id_wisata = '$id_wisata'";
$exe = mysqli_query($conn, $query);
?>