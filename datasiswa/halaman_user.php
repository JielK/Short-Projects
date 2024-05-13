<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA SISWA</title>
</head>
<body>
	<h2>DATA SISWA</h2>
	<br/>
	<a href="logout.php">LOGOUT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Tempat Tanggal Lahir</th>
			<th>Kelas</th>
			<th>Jurusan</th>
            <th>NIK</th>
            <th>Alamat</th>
			<th>Nomor Handphone</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tempat_tanggal_lahir']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nomor_handphone']; ?></td>
			<?php 
		}
		?>
	</table>
    <br/>
	<br/>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Mata Pelajaran</th>
			<th>Guru Pengampu</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mata_pelajaran");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['mata_pelajaran']; ?></td>
				<td><?php echo $d['guru_pengampu']; ?></td>
			</tr><?php
		}
		?>
	</table>
</body>
</html>