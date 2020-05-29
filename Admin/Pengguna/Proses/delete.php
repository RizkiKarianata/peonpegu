<?php
include '../../../koneksi.php';

$id_user = $_POST['id_user'];
$query = "DELETE FROM tb_user WHERE id_user = '$id_user'";
$exe = mysqli_query($conn, $query);
?>