<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA SISWA & MAPEL</title>
</head>
<body>
 
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA SISWA</h3>
	<form method="post" action="fungsi_tambah.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tempat Tanggal lahir</td>
				<td><input type="text" name="tempat_tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas"></td>
			</tr>
            <tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor Handphone</td>
				<td><input type="number" name="nomor_handphone"></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"><td>
			</tr>		
		</table>
	</form>
</body>
</html>