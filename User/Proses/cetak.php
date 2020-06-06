<?php
include '../../koneksi.php';
require('../../assets/plugins/fpdf182/fpdf.php');
$id = $_GET['id'];

$no = 1;
$query = "SELECT t.id_user, t.id_wisata, t.jumlah_pesan, t.total_harga, t.status, t.created, u.id_user, u.nama_lengkap, u.no_hp, w.id_wisata, w.nama_wisata FROM tb_transaksi t INNER JOIN tb_user u ON t.id_user = u.id_user INNER JOIN tb_wisata w ON t.id_wisata = w.id_wisata WHERE t.id_transaksi = '$id'";
$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

$pdf->Cell(130 ,5,'Peonpegu',0,0);
$pdf->Cell(59 ,5,'',0,1);
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Jl. Kalijogo No. 17',0,0);
$pdf->Cell(59 ,5,'',0,1);

$pdf->Cell(130 ,5,'Malang, Jawa Timur, 65158',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(130 ,5,''.date('d/m/Y').'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(10 ,5,'No',1,0);
$pdf->Cell(60 ,5,'Nama Wisata',1,0);
$pdf->Cell(60 ,5,'Jumlah',1,0);
$pdf->Cell(56 ,5,'Total Harga',1,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(10 ,5,''.$no++.'',1,0);
$pdf->Cell(60 ,5,''.$row['nama_wisata'].'',1,0);
$pdf->Cell(60 ,5,''.$row['jumlah_pesan'].'',1,0);
$pdf->Cell(56 ,5,''.$row['total_harga'].'',1,1);

$pdf->Output();
?>