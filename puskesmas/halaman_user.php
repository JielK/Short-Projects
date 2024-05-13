<!DOCTYPE html>
<html id="haluser">
<head>
	<title>CRUD PUSKESMAS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fa/css/all.min.css">
</head>
<body>
	<img src="img/moon.png" id="icon" class="nav-item theme">
	<center><h2>DATA DOKTER</h2></center>
	<br/>
	<a href="logout.php"><button class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> LOGOUT</button></a>
	<br/>
	<br/>
	<center>
	<table class="table table-bordered" id="table1" style="width: 42%;">
		<tr class="text-center">
			<th style="display: none;">No.</th>
			<th>No.</th>
			<th>Nama Dokter</th>
			<th>Bidang</th>
		</tr>
		
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_dokter");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td style="text-align: center;"></td>
				<td><?php echo $d['nama']; ?></td>
				<td class="text-center"><?php echo $d['bidang']; ?></td>
			</tr>
			<?php 
		}
		?>

	</table>
	</center>
<script>
	var table = document.getElementsByTagName('table')[0],
  rows = table.getElementsByTagName('tr'),
  text = 'textContent' in document ? 'textContent' : 'innerText';

for (var i = 0, len = rows.length; i < len; i++) {
  rows[i].children[0][text] = i + '.	 ' + rows[i].children[0][text];
}
</script>
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
</body>
</html>
