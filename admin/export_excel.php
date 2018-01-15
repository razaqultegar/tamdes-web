<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=nama_filenya.xls");
?>

<h3>Data Tamu</h3>

<table border="1" cellpadding="5">
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
	include "db/connect.php";

	// Buat query untuk menampilkan semua data siswa
	$sql = $link->prepare("SELECT * FROM siswa");
	$sql->execute(); // Eksekusi querynya

	$no = 1; // Untuk penomoran tabel, di awal set dengan 1
	while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$data['noktp']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['notelp']."</td>";
		echo "<td>".$data['asal']."</td>";
		echo "<td>".$data['tinggal']."</td>";
		echo "<td>".$data['lama']."</td>";
		echo "<td>".$data['keper']."</td>";
		echo "</tr>";

		$no++; // Tambah 1 setiap kali looping
	}
	?>
</table>
