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
  $no_hp = $_POST['no_hp'];
  $username = $_POST['username'];

  $query = "SELECT * FROM tb_user WHERE no_hp = '$no_hp' AND username = '$username'";
  $exe = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($exe);
  $cek = mysqli_num_rows($exe);

  if($cek > 0) {
    setcookie('chrome', base64_encode($row['id_user']), time() + (60 * 60 * 24 * 1), '/');
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: 'Pemberitahuan',
      text: 'Data ditemukan'
    }).then(function() {
      window.location.href='../ubah-katasandi'
    });
    </script>";
  }else{
    echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Peringatan',
      text: 'Data tidak ditemukan'
    }).then(function() {
      window.location.href='../lupa-katasandi';
    });
    </script>";
  }
  ?>
</body>
</html>