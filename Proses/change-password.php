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
  $password = mysqli_escape_string($conn, $_POST['password']);
  $password_confirmation = mysqli_escape_string($conn, $_POST['password_confirmation']);
  $id_user = base64_decode($_COOKIE['chrome']);

  if($password != $password_confirmation) {
    echo "<script>
    Swal.fire({
      allowEnterKey: false,
      allowOutsideClick: false,
      icon: 'error',
      title: 'Peringatan',
      text: 'Kata Sandi yang Anda masukkan tidak cocok'
    }).then(function() {
      window.location.href='../ubah-katasandi';
    });
    </script>";
  }else {
    $password_acak = password_hash($password_confirmation, PASSWORD_DEFAULT);
    $query = "UPDATE tb_user SET password = '$password_acak' WHERE id_user = '$id_user'";
    $exe = mysqli_query($conn, $query);
    if($exe) {
      setcookie("chrome", "", time() + (60 * 60 * 24 * 5), '/');
      echo "<script>
      Swal.fire({
        icon: 'success',
        title: 'Pemberitahuan',
        text: 'Kata sandi berhasil diubah'
      }).then(function() {
        window.location.href='../halaman-masuk'
      });
      </script>";
    }else {
      echo "<script>
      Swal.fire({
        icon: 'error',
        title: 'Peringatan',
        text: 'Kata sandi gagal diubah'
      }).then(function() {
        window.location.href='../ubah-katasandi';
      });
      </script>";
    }
  }
  ?>
</body>
</html>