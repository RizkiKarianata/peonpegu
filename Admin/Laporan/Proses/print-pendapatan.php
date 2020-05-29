<?php
include '../../../koneksi.php';
//call the FPDF library
require('../../../assets/dist-2/vendors/fpdf182/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font jadi arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'Peonpegu',0,0);
$pdf->Cell(59 ,5,'Petugas',0,1);//end of line

//set font jadi arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Jl. Kalijogo No. 17',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Malang, Jawa Timur, 65158',0,0);
$pdf->Cell(25 ,5,'Tanggal',0,0);
$pdf->Cell(34 ,5,''.date('d/m/Y').'',0,1);//end of line

$pdf->Cell(130 ,5,'+62 895-3953-33224',0,0);
$pdf->Cell(25 ,5,'Nama',0,0);
$pdf->Cell(34 ,5,'Rizki Karianata',0,1);//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(10 ,5,'No',1,0, 'C');
$pdf->Cell(50 ,5,'Wisata',1,0, 'C');
$pdf->Cell(50 ,5,'Pengguna',1,0, 'C');
$pdf->Cell(20 ,5,'Jumlah',1,0, 'C');
$pdf->Cell(35 ,5,'Total',1,0, 'C');
$pdf->Cell(24 ,5,'Status',1,1, 'C');

$pdf->SetFont('Arial','',12);

$sql = mysqli_query($conn, "SELECT SUM(total_harga) AS total_pendapatan FROM tb_transaksi");
$data = mysqli_fetch_array($sql);

//Angka diratakan kanan, jadi kita beri property 'R'
$no = 1;
$query = "SELECT t.id_transaksi, t.jumlah_pesan, t.status, t.total_harga, u.nama_lengkap, w.nama_wisata FROM tb_transaksi t INNER JOIN tb_user u ON t.id_user = u.id_user INNER JOIN tb_wisata w ON t.id_wisata = w.id_wisata ORDER BY t.id_transaksi ASC";
$exe = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($exe)) {
	if($row['status'] == '0') {
		$status = 'Pending';
	}else if($row['status'] == 1) {
		$status = 'Proses';
	}else if($row['status'] == 2) {
		$status = 'Berhasil';
	}else {
		$status = '';
	}
	$pdf->Cell(10 ,5,''.$no++.'',1,0, 'C');
	$pdf->Cell(50 ,5,''.$row['nama_wisata'].'',1,0, 'C');
	$pdf->Cell(50 ,5,''.$row['nama_lengkap'].'',1,0, 'C');
	$pdf->Cell(20 ,5,''.$row['jumlah_pesan'].'',1,0, 'C');
	$pdf->Cell(35 ,5,'Rp. '.number_format($row['total_harga']).'',1,0, 'C');
	$pdf->Cell(24 ,5,''.$status.'',1,1, 'C');
}
$pdf->Cell(130, 5,'Total Pendapatan :',1,0, 'C');
$pdf->Cell(59, 5,'Rp.'.number_format($data['total_pendapatan']).'',1,1, 'C');
//output the result
$pdf->Output();
?>