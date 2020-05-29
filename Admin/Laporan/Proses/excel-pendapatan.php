<!DOCTYPE html>
<html>
<head>
  <title>Laporan</title>
</head>
<body>
  <center><h1>Laporan Peonpegu</h1></center>
  <?php
  include "../../../koneksi.php";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Pendapatan.xls");
  ?>
  <table border="1" align="center">
    <thead>
      <tr>
        <th>No</th>
        <th>Wisata</th>
        <th>Pengguna</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      $query = "SELECT t.id_transaksi, t.jumlah_pesan, t.status, t.total_harga, u.nama_lengkap, w.nama_wisata FROM tb_transaksi t INNER JOIN tb_user u ON t.id_user = u.id_user INNER JOIN tb_wisata w ON t.id_wisata = w.id_wisata ORDER BY t.id_transaksi ASC";
      $exe = mysqli_query($conn,$query);
      while ($row = mysqli_fetch_array($exe)) {
        if($row['status'] == '0') {
          $status = 'Pending';
        }else if($row['status'] == 1) {
          $status = 'Proses';
        }else if($row['status'] == 2) {
          $status = 'Berhasil';
        }else {
          $status = '';
        }
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['nama_wisata']; ?></td>
          <td><?php echo $row['nama_lengkap']; ?></td>
          <td><?php echo $row['jumlah_pesan']; ?></td>
          <td><?php echo number_format($row['total_harga']); ?></td>
          <td><?php echo $status; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>