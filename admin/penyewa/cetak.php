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

$pdf->Cell(6, 7, 'NO', 1, 0, 'C');
$pdf->Cell(27, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(24, 7, 'NO_HP', 1, 0, 'C');
$pdf->Cell(30, 7, 'NO_KTP', 1, 0, 'C');
$pdf->Cell(26, 7, 'TIPE_MOBIL', 1, 0, 'C');
$pdf->Cell(15, 7, 'HARGA', 1, 0, 'C');
$pdf->Cell(24, 7, 'TGL_PINJAM', 1, 0, 'C');
$pdf->Cell(24, 7, 'TGL_KEMBALI', 1, 0, 'C');
$pdf->Cell(14, 7, 'DURASI', 1, 0, 'C');



$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($konek, "SELECT tb_penyewa.*,tbmobil.TipeMobil, tbmobil.Harga
FROM tb_penyewa
JOIN tbmobil ON tb_penyewa.mobil_id = tbmobil.id;");
while ($d = mysqli_fetch_array($data)) {
  $pdf->Cell(6, 6, $no++, 1, 0, 'C');
  $pdf->Cell(27, 6, $d['nama'], 1, 0);
  $pdf->Cell(24, 6, $d['no_hp'], 1, 0);
  $pdf->Cell(30, 6, $d['no_ktp'], 1, 0);
  $pdf->Cell(26, 6, $d['TipeMobil'], 1, 0);
  $pdf->Cell(15, 6, $d['Harga'], 1, 0);
  $pdf->Cell(24, 6, $d['tanggal_peminjaman'], 1, 0);
  $pdf->Cell(24, 6, $d['tanggal_pengembalian'], 1, 0);
  $pdf->Cell(14, 6, $d['lama_peminjaman'] . '' . 'hari', 1, 1);
}

$pdf->Output();
