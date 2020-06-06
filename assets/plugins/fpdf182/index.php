<?php
//call the FPDF library
require('fpdf.php');

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

$pdf->Cell(130 ,5,'Toko Online Karmashop',0,0);
$pdf->Cell(59 ,5,'Pesanan',0,1);//end of line

//set font jadi arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'Jl. Kalijogo No. 17',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Malang, Jawa Timur, 65158',0,0);
$pdf->Cell(25 ,5,'Tanggal',0,0);
$pdf->Cell(34 ,5,'21/01/2002',0,1);//end of line

$pdf->Cell(130 ,5,'+62 895-3953-33224',0,0);
$pdf->Cell(25 ,5,'Kode TRX',0,0);
$pdf->Cell(34 ,5,'31623',0,1);//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line

//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//alamat billing 
$pdf->Cell(100 ,5,'Pembelian Atas',0,1);//end of line

//tambah dummy cell di awal untuk indentasi
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Moehammad Rizki Karianata',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'17 Tahun',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'Jalan Mendalanwangi No. 18 Kecamatan Wagir',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'089731265129',0,1);
 
//buat dummy cell untuk memberi jarak vertikal
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice 
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Nama Barang',1,0);
$pdf->Cell(25 ,5,'Jumlah',1,0);
$pdf->Cell(34 ,5,'Total Harga',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Angka diratakan kanan, jadi kita beri property 'R'

$pdf->Cell(130 ,5,'UltraCool Fridge',1,0);
$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'3,250',1,1,'R');//end of line

$pdf->Cell(130 ,5,'Supaclean Diswasher',1,0);
$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'1,200',1,1,'R');//end of line

$pdf->Cell(130 ,5,'Something Else',1,0);
$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,'1,000',1,1,'R');//end of line

//total
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line
//output the result
$pdf->Output();
?>