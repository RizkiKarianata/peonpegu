<?php
include '../../../koneksi.php';

$id_testimoni = $_POST['id_testimoni'];
$query = "DELETE FROM tb_testimoni WHERE id_testimoni = '$id_testimoni'";
$exe = mysqli_query($conn, $query);
?>