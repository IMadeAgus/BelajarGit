<?php
require('fpdf/fpdf.php');
include 'koneksi.php';

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Times','B',13);
$pdf->Cell(400,10,'DATA LIST MOBIl',0,0,'C');

$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'TIPE MOBIL',1,0,'C');
$pdf->Cell(55,7,'DESKRIPSI',1,0,'C');
$pdf->Cell(35,7,'HARGA',1,0,'C');


$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($konek,"SELECT * FROM tbmobil");
while($d = mysqli_fetch_array($data)){
$pdf->Cell(10,6, $no++,1,0,'C');
$pdf->Cell(50,6, $d['TipeMobil'],1,0);
$pdf->Cell(55,6, $d['Deskripsi'],1,0);
$pdf->Cell(35,6, $d['Harga'],1,1);
}

$pdf->Output();
?>