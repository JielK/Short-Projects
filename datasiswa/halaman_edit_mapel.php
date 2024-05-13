<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA SISWA & MAPEL</title>
</head>
<body>
	<br/>
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MATA PELAJARAN</h3>
 
	<?php
	include 'koneksi.php';
	$id_mata_pelajaran = $_GET['id_mata_pelajaran'];
	$datamapel = mysqli_query($koneksi,"select * from mata_pelajaran where id_mata_pelajaran='$id_mata_pelajaran'");
	while($dm = mysqli_fetch_array($datamapel)){
		?>
		<form method="post" action="fungsi_edit_mapel.php">
			<table>
				<tr>			
					<td>Mata Pelajaran</td>
					<td>
                        <input type="hidden" name="id_mata_pelajaran" value="<?php echo $dm['id_mata_pelajaran']; ?>">
						<input type="text" name="mata_pelajaran" value="<?php echo $dm['mata_pelajaran']; ?>">
					</td>
				</tr>
				<tr>
					<td>Guru Pengampu</td>
					<td><input type="text" name="guru_pengampu" value="<?php echo $dm['guru_pengampu']; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>	
				<?php 
					
				?>
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>