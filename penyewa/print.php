<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
include 'koneksi.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'DATA PENYEWA', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);

$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(30, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(30, 7, 'NO_HP', 1, 0, 'C');
$pdf->Cell(30, 7, 'NO_KTP', 1, 0, 'C');
$pdf->Cell(30, 7, 'TGL_PINJAM', 1, 0, 'C');
$pdf->Cell(30, 7, 'TGL_KEMBALI', 1, 0, 'C');
$pdf->Cell(30, 7, 'LAMA PINJAM', 1, 0, 'C');



$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($konek, "SELECT  * FROM tb_penyewa ");
while ($d = mysqli_fetch_array($data)) {
  $pdf->Cell(10, 6, $no++, 1, 0, 'C');
  $pdf->Cell(30, 6, $d['nama'], 1, 0);
  $pdf->Cell(30, 6, $d['no_hp'], 1, 0);
  $pdf->Cell(30, 6, $d['no_ktp'], 1, 0);
  $pdf->Cell(30, 6, $d['tgl_peminjaman'], 1, 0);
  $pdf->Cell(30, 6, $d['tgl_pengembalian'], 1, 0);
  $pdf->Cell(30, 6, $d['lama_peminjaman'], 1, 1);
}

$pdf->Output();
