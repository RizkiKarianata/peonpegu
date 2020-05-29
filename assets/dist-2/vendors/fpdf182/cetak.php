<?php
require_once("konversi.php"); 
require_once("fpdf.php"); 
require_once("pengaturan.php"); 
$nama=$_GET['nm']; 
$uang=$_GET['jml']; 
$untuk=$_GET['utk']; 
$petugas=$_GET['ptg']; 
$konversi=new Konversi(); 
$pengaturan=new Pengaturan(); 
$pdf=new FPDF('L','mm','A5');/*L untuk tampilan Landscape, A5 adalah ukuran kertasnya*/
$arraybln=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'); 
$bln=$arraybln[date('n')-1]; 
$thn=date('Y');
$tgl=date('d'); 
/*membuat file PDF untuk dicetak*/ 
$pdf->setMargins(10,6,10); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','B',13); 
$pdf->Cell(0,5,$pengaturan->atur['namapt'],0,1,'L'); 
$pdf->SetFont('Arial','',11); 
$pdf->MultiCell(0,5,$pengaturan->atur['alamat']." \n".$pengaturan->atur['telpon']); 
$pdf->SetLineWidth(0.8);
$pdf->Line(10,28,199,28);
$pdf->Ln(8); 
$pdf->SetFont('Arial','B',13);
$pdf->Cell(60,5,'',0,0,''); 
$pdf->Cell(0,5,$pengaturan->atur['judul'],0,1,'L'); 
$pdf->SetLineWidth(0.4); 
$pdf->Rect(60,30,80,13);/*ubah ukuran Kotak Judul -> Rect(sumbu x, sumbu y, lebar kotak,tinggi kotak)*/ 
$pdf->SetFont('Arial','',11);
$pdf->Ln(10); 
$pdf->Cell(45,5,'Telah Terima Dari :',0,0,'L'); 
$pdf->SetFont('Arial','',12);
$pdf->Cell(70,7,strtoupper($nama),0,1,'J'); 
$pdf->Line(50,56,150,56);
$pdf->Rect(50,61,115,10); 
$pdf->Rect(50,74,115,10);
$pdf->Ln(6); 
$pdf->Cell(40,20,'Uang Sejumlah :',0,0,'L'); 
$pdf->MultiCell(113,11,$konversi->Terbilang($uang)." RUPIAH",'J'); 
if(strlen($konversi->Terbilang($uang))>40)
$lnBreak=6;
else
$lnBreak=16;
$pdf->Ln($lnBreak); 
$pdf->Cell(45,5,'Untuk Pembayaran :',0,0,'L');
$pdf->Cell(70,7,strtoupper($untuk),0,1,'J'); 
$pdf->Line(50,97,150,97); 
$pdf->Ln(6); 
$pdf->Cell(116,5,'',0,0,'');
$pdf->SetFont('Arial','U',12); 
$pdf->Cell(0,5,$pengaturan->atur['kota'].', '.$tgl.' '.$bln.' '.$thn,0,1,'L'); 
$pdf->Ln(10); 
$pdf->SetFont('Arial','',14); 
$pdf->Cell(116,5,'Rp. '.number_format($uang,0,",",".").',-',0,1,'L'); 
$pdf->Rect(8,116,50,10); 
$pdf->SetFont('Arial','',12); 
$pdf->Cell(140-strlen($petugas),5,'',0,0,'L'); 
$pdf->SetFont('Arial','BU',14);
$pdf->Cell(30,5,'( '.strtoupper($petugas).' )',0,1,'L'); 
$pdf->Output();