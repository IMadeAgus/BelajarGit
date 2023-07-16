<?php
require('fpdf/fpdf.php');
include 'koneksi.php';

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA LIST MOBIL',0,0,'C');

$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'TIPE MOBIL',1,0,'C');
$pdf->Cell(75,7,'DESKRIPSI',1,0,'C');
$pdf->Cell(30,7,'FOTO MOBIL',1,0,'C');
$pdf->Cell(25,7,'HARGA',1,0,'C');


$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',8);
$no=1;
$data = mysqli_query($konek,"SELECT * FROM tbmobil");
while($d = mysqli_fetch_array($data)){
$pdf->Cell(10,6, $no++,1,0,'C');
$pdf->Cell(50,6, $d['TipeMobil'],1,0,'C');
$pdf->Cell(75,6, $d['Deskripsi'],1,0,'C');
$pdf->Cell(30,6, $d['FotoMobil'],1,0,'C');
$pdf->Cell(25,6, $d['Harga'],1,1,'C');
}

$pdf->Output();
?>