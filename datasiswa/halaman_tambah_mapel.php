<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA SISWA & MAPEL</title>
</head>
<body>
 
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MATA PELAJARAN</h3>
	<form method="post" action="fungsi_tambah_mapel.php">
		<table>
			<tr>			
				<td>Mata Pelajaran</td>
				<td><input type="text" name="mata_pelajaran"></td>
			</tr>
			<tr>
				<td>Guru Pengampu</td>
				<td><input type="text" name="guru_pengampu"></td>
			</tr>
			<tr>
				<td><input type="submit" value="submit"><td>
			</tr>		
		</table>
	</form>
</body>
</html>