<!DOCTYPE html>
<html id="haledit">
<head>
	<title>EDIT DATA PESERTA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<img src="img/moon.png" id="icon" class="nav-item theme">
	<?php
	include 'koneksi.php';
	$id_peserta = $_GET['id_peserta'];
	$data = mysqli_query($koneksi,"select * from tb_peserta where id_peserta='$id_peserta'");
	while($d = mysqli_fetch_array($data)){
		?>
	<div class="kotak_edit">
		<h2>EDIT DATA PESERTA</h2>
		<form method="post" action="fungsi_edit.php">

					<label>NIK</label>
                    <input type="hidden" name="id_peserta" value="<?php echo $d['id_peserta']; ?>">
					<input type="text" name="nik" value="<?php echo $d['nik']; ?>">


					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $d['nama']; ?>">


					<label>Tempat Tanggal Lahir</label>
					<input type="text" name="ttl" value="<?php echo $d['ttl']; ?>">

				<input type="submit" value="SIMPAN" class="simpan">

		</form>
		<a href="halaman_admin.php" style="top: 30px; position: relative;"><button class="kembali">kembali</button></a>
	</div>
		<?php 
	}
	?>
 
</body>

<script>
 		
 		const themeToggle = document.querySelector("#icon");

		const currentTheme = localStorage.getItem("theme");
		const pageTheme = document.body;

		let isDark = true

		if (currentTheme == "dark") {
		  pageTheme.classList.add("dark-mode");
		  icon.src = 'img/sun.png';
		} else {
		   icon.src = 'img/moon.png';
		}

		function themeMode() {
		    isDark = !isDark;
		    isDark ? icon.src = 'img/sun.png' : icon.src = 'img/moon.png';;
		    pageTheme.classList.toggle("dark-mode");

		    let theme = "light";
		    if (pageTheme.classList.contains("dark-mode")) {
		      theme = "dark";
		    }
		    localStorage.setItem("theme", theme);
		}

		themeToggle.addEventListener("click", themeMode)

</script>
</html>