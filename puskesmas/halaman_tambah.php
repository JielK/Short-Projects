<!DOCTYPE html>
<html id="haltambah">
<head>
	<title>TAMBAH DATA PESERTA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<img src="img/moon.png" id="icon" class="nav-item theme">
 
<div class="kotak_tambah">
	<br/>
	<br/>
	<h2>TAMBAH DATA PESERTA</h2>
	<form method="post" action="fungsi_tambah.php">
			
				<label>NIK</label>
				<input type="number" name="nik">


				<label>Nama</label>
				<input type="text" name="nama">

				<label>Tempat, Tanggal Lahir</label>
				<input type="text" name="ttl">

				<input class="tambah" type="submit" value="submit">
	</form>
	<a href="halaman_admin.php"><button class="kembali">kembali</button></a>
</div>
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