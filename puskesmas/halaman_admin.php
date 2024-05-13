<!DOCTYPE html>
<html id="haladmin">
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fa/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>CRUD DATA PUSKESMAS</title>
</head>
<body>
	<img src="img/moon.png" id="icon" class="nav-item theme">
	<center><h2>DATA PUSKESMAS</h2></center>
	<br/>
	<a href="logout.php"><button class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> LOGOUT</button></a>
	<br/>
	<br/>
	<h2 style="margin-left: 80px;">Data Peserta</h2>
	<a href="halaman_tambah.php"><button class="tambah"><i class="fa-solid fa-plus"></i> &nbspTAMBAH</button></a>
	<input type="text" id="serj" onkeyup="fungsiserj()" placeholder="Cari Nama Peserta..">
	<br/>
	<br/>
	<table style="width:52%;" class="table table-bordered"  id="table1" >
		<tr  class="text-center">
			<th>NIK</th>
			<th>Nama</th>
			<th>Tempat Tanggal lahir</th>
			<th style="width:170px ; height: 10px;">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_peserta");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['ttl']; ?></td>
				<td>
					<a href="halaman_edit.php?id_peserta=<?php echo $d['id_peserta']; ?>"><button class="edit"><i class="fa-solid fa-pen-to-square"></i>&nbspEDIT</button></a>
					<a href="hapus.php?id_peserta=<?php echo $d['id_peserta']; ?>"><button class="hapus"><i class="fa-solid fa-trash-can text"></i>&nbspHAPUS</button></a>

				</td>
			</tr><?php
		}
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<h2 style="margin-left: 80px;">Data Dokter</h2>
	<a href="halaman_tambah_dokter.php"><button class="tambah_mapel"><i class="fa-solid fa-plus"></i> &nbspTAMBAH</button></a>
	<input type="text" id="serj2" onkeyup="fungsiserj2()" placeholder="Cari Nama Dokter..">
	<br/>
	<br/>
	<table style="width:52%;" class="table table-bordered text-center" id="table2">
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tempat Tanggal Lahir</th>
			<th>Bidang</th>
			<th style="width:170px ; height: 10px;">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$datadokter = mysqli_query($koneksi,"select * from tb_dokter");
		while($dd = mysqli_fetch_array($datadokter)){
			?>
			<tr>
				<td><?php echo $dd['nik']; ?></td>
				<td><?php echo $dd['nama']; ?></td>
				<td><?php echo $dd['ttl']; ?></td>
				<td><?php echo $dd['bidang']; ?></td>
				<td>
					<a href="halaman_edit_dokter.php?id_dokter=<?php echo $dd['id_dokter']; ?>"><button class="edit"><i class="fa-solid fa-pen-to-square"></i>&nbspEDIT</button></a>
					<a href="hapus_dokter.php?id_dokter=<?php echo $dd['id_dokter']; ?>"><button class="hapus"><i class="fa-solid fa-trash-can text"></i>&nbspHAPUS</button></a>
				</td>
			</tr><?php
		}
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<h2 style="margin-left: 80px;">Data Bidang</h2>
	<a href="halaman_tambah_bidang.php"><button class="tambah_mapel"><i class="fa-solid fa-plus"></i> &nbspTAMBAH</button></a>
	<input type="text" id="serj3" onkeyup="fungsiserj3()" placeholder="Cari Bidang..">
	<table style="width:25.9%;" class="table table-bordered text-center" id="table3">
		<tr>
			<th>Bidang</th> 	
			<th style="width:215px ; height: 10px;">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$databidang = mysqli_query($koneksi,"select * from tb_bidang");
		while($db = mysqli_fetch_array($databidang)){
			?>
			<tr>
				<td><?php echo $db['nama_bidang']; ?></td>
				<td>
					<a href="halaman_edit_bidang.php?id_bidang=<?php echo $db['id_bidang']; ?>"><button class="edit_bidang"><i class="fa-solid fa-pen-to-square"></i>&nbspEDIT</button></a>
					<a href="hapus_bidang.php?id_bidang=<?php echo $db['id_bidang']; ?>"><button class="hapus_bidang"><i class="fa-solid fa-trash-can text"></i>&nbspHAPUS</button></a>

				</td>
			</tr><?php
		}
		?>
	</table>
<br><br><br><br><br><br><br><br><br>
</body>
<script>
function fungsiserj() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("serj");
  filter = input.value.toUpperCase();
  table = document.getElementById("table1");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<script>
function fungsiserj2() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("serj2");
  filter = input.value.toUpperCase();
  table = document.getElementById("table2");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
function fungsiserj3() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("serj3");
  filter = input.value.toUpperCase();
  table = document.getElementById("table3");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
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
</html>