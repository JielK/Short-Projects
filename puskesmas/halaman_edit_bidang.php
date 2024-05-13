<html id="haledit">
<head>
	<title>EDIT DATA BIDANG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<img src="img/moon.png" style="top: 0px;" id="icon" class="nav-item theme">
	<?php
	include 'koneksi.php';
	$id_bidang = $_GET['id_bidang'];
	$databidang = mysqli_query($koneksi,"select * from tb_bidang where id_bidang='$id_bidang'");
	while($db = mysqli_fetch_array($databidang)){
		?>
	<br><br><br><br><br><br>
	<div class="kotak_edit">
		<h2>EDIT DATA BIDANG</h2>
		<form method="post" action="fungsi_edit_bidang.php">
		
					<td>Nama Bidang</td>
                        <input type="hidden" name="id_bidang" value="<?php echo $db['id_bidang']; ?>">
						<input type="text" name="nama_bidang" value="<?php echo $db['nama_bidang']; ?>">


				<input type="submit" value="SIMPAN" class="simpan">
						

		</form>
		<a href="halaman_admin.php" style="top: 14px; position: relative;"><button class="kembali">kembali</button></a>
		
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