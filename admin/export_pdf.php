<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>

   <style>
   table {border-collapse:collapse; table-layout:fixed;width: 630px;}
   table td {word-wrap:break-word;width: 20%;}
   </style>
</head>
<body>

<h1 style="text-align: center;">Data Siswa</h1>
<table border="1" width="100%">
<tr>
  <th>No. KTP</th>
  <th>Nama Lengkap</th>
  <th>No. Telp</th>
  <th>Alamat Asal</th>
  <th>Alamat Tinggal</th>
  <th>Lama Tinggal</th>
  <th>Keperluan</th>
  <th>Opsi</th>
</tr>
<?php
// Load file koneksi.php
$link = mysqli_connect("localhost", "root", "", "db_tamdesapp") or die(mysqli_error($link));

$query = "SELECT * FROM tb_buku"; // Tampilkan semua data gambar
$sql = mysqli_query($link, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<tr>";
        echo "<td>".$data['noktp']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['notelp']."</td>";
        echo "<td>".$data['asal']."</td>";
        echo "<td>".$data['tinggal']."</td>";
        echo "<td>".$data['lama']."</td>";
        echo "<td>".$data['keper']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('../vendor/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data Tamu Desa.pdf', 'D');
?>
