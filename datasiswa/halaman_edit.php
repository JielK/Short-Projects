<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<br/>
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA SISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id_siswa = $_GET['id_siswa'];
	$data = mysqli_query($koneksi,"select * from siswa where id_siswa='$id_siswa'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="fungsi_edit.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
                        <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tempat Tanggal Lahir</td>
					<td><input type="text" name="tempat_tanggal_lahir" value="<?php echo $d['tempat_tanggal_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
                <tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
				</tr>
				 <tr>
					<td>NIK</td>
					<td><input type="text" name="nik" value="<?php echo $d['nik']; ?>"></td>
				</tr>
				 <tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				 <tr>
					<td>Nomor Handphone</td>
					<td><input type="text" name="nomor_handphone" value="<?php echo $d['nomor_handphone']; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>	

			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>