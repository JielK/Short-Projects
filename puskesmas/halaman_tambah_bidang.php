<!DOCTYPE html>
<html id="haltambah">
<head>
	<title>TAMBAH DATA BIDANG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br><br><br>
	<img src="img/moon.png" id="icon" class="nav-item theme">
 

	<br/>
	<br/>
	
	<div class="kotak_tambah">
		<h2>TAMBAH DATA BIDANG</h2>
		<form method="post" action="fungsi_tambah_bidang.php">

					<label>Bidang</label>
					<input type="text" name="nama_bidang">

					<input type="submit" class="tambah" value="submit">

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