<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF('L');
$pdf->AddPage();

$pdf->Image('logo.png',25,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Daftar Nilai Peserta Lelang Tender','0','1','C',false);
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
$pdf->Cell(45,6,'Nama Lelang',1,0,'c');
$pdf->Cell(45,6,'pemilik',1,0,'c');
$pdf->Cell(40,6,'Telepon',1,0,'c');
$pdf->Cell(25,6,'Total Poin',1,0,'c');
$pdf->Cell(25,6,'Nilai',1,0,'c');

$pdf->Ln(2);

$no=0;
$sql = mysql_query("select penilaian.appk,penilaian.situ,penilaian.siup,penilaian.tdp,penilaian.ktp_pemilik,
					penilaian.npwp_perusahaan, penilaian.norek_perusahaan,penilaian.skt,penilaian.skdp,penilaian.nsfp,penilaian.ka,
					penilaian.k_bank, vendor.nama_vendor,vendor.pemilik,vendor.telepon, lelang.nama_lelang,lelang.hps from penilaian join
					vendor on penilaian.id_vendor=vendor.id_vendor join lelang on penilaian.id_lelang=lelang.id_lelang") or die(mysql_error());
while($data = mysql_fetch_array($sql)){
					$a = $data['appk'];
					$b = $data['situ'];
					$c = $data['siup'];
					$d = $data['tdp'];
					$e = $data['ktp_pemilik'];
					$f = $data['npwp_perusahaan'];
					$g = $data['norek_perusahaan'];
					$h = $data['skt'];
					$i = $data['skdp'];
					$j = $data['nsfp'];
					$k = $data['ka'];
					$l = $data['k_bank'];
					$hps = $data['hps'];
					$total = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l;
					$benefit = $hps * $total/30;
					$nilai = $benefit/$hps;

	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(8,4,$no.".",1,0,'c');
	$pdf->Cell(70,4,$data['nama_vendor'],1,0,'L');
	$pdf->Cell(45,4,$data['nama_lelang'],1,0,'L');
	$pdf->Cell(45,4,$data['pemilik'],1,0,'L');
	$pdf->Cell(40,4,$data['telepon'],1,0,'L');
	$pdf->Cell(25,4,"$total",1,0,'L');
	$pdf->Cell(25,4,"$nilai",1,0,'L');
		
}

$pdf->Output();
?>