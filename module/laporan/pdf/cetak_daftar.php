<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF('L');
$pdf->AddPage();

$pdf->Image('logo.png',25,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Daftar Peserta Lelang Tender','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'Dinas Pekerjaan umum dan penataan ruang ','0','1','C',false);
$pdf->Ln(2);
$pdf->Cell(0,5,'Kabupaten Serang','0','1','C',false);
$pdf->Ln(10);
$pdf->Cell(270,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'NO',1,0,'c');
$pdf->Cell(70,6,'Nama Vendor',1,0,'c');
$pdf->Cell(45,6,'pemilik',1,0,'c');
$pdf->Cell(90,6,'alamat',1,0,'c');
$pdf->Cell(40,6,'Telepon',1,0,'c');
$pdf->Ln(2);

$no=0;
$sql = mysql_query("select * from vendor") or die(mysql_error());
while($data = mysql_fetch_array($sql)){
	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(8,4,$no.".",1,0,'c');
	$pdf->Cell(70,4,$data['nama_vendor'],1,0,'L');
	$pdf->Cell(45,4,$data['pemilik'],1,0,'L');
	$pdf->Cell(90,4,$data['alamat'],1,0,'L');
	$pdf->Cell(40,4,$data['telepon'],1,0,'L');
}

$pdf->Output();
?>