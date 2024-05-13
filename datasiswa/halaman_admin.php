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
	<a href="halaman_tambah.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1" style="width: 80%;">
		<tr>
			<th>Nama</th>
			<th>Tempat Tanggal lahir</th>
			<th>Kelas</th>
			<th>Jurusan</th>
            <th>NIK</th>
            <th>Alamat</th>
			<th>Nomor Handphone</th>
            <th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tempat_tanggal_lahir']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nomor_handphone']; ?></td>
				<td>
					<a href="halaman_edit.php?id_siswa=<?php echo $d['id_siswa']; ?>">EDIT</a>
					<a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>">HAPUS</a>

				</td>
			</tr><?php
		}
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
	<a href="halaman_tambah_mapel.php">TAMBAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Mata Pelajaran</th>
			<th>Guru Pengampu</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$datamapel = mysqli_query($koneksi,"select * from mata_pelajaran");
		while($dm = mysqli_fetch_array($datamapel)){
			?>
			<tr>
				<td><?php echo $dm['mata_pelajaran']; ?></td>
				<td><?php echo $dm['guru_pengampu']; ?></td>
				<td>
					<a href="halaman_edit_mapel.php?id_mata_pelajaran=<?php echo $dm['id_mata_pelajaran']; ?>">EDIT</a>
					<a href="hapus_mapel.php?id_mata_pelajaran=<?php echo $dm['id_mata_pelajaran']; ?>">HAPUS</a>

				</td>
			</tr><?php
		}
		?>
	</table>


</body>
</html>