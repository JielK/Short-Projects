<!DOCTYPE html>
<html id="haltambah">
<head>
	<title>TAMBAH DATA DOKTER</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<img src="img/moon.png" id="icon" class="nav-item theme" style="top: 2px;">
	<br/>
	<br/>
	<div class="kotak_tambah">
	<h2>TAMBAH DATA DOKTER</h2>
	<form method="post" action="fungsi_tambah_dokter.php">		
				<label>NIK</label>
				<input type="number" name="nik">

				<label>Nama</label>
				<input type="text" name="nama">

				<label>Tempat Tanggal Lahir</label>
				<input type="text" name="ttl">

				<p>Bidang</p>
					<?php
					include 'koneksi.php';
					$databidang = mysqli_query($koneksi,"select * from tb_bidang where id_bidang='1'");
					while($db = mysqli_fetch_array($databidang)){
						?>
			     <label class="container"><input type="checkbox" class="radio" checked='checked' name="bidang" value="<?php echo $db['nama_bidang']; ?>"><?php echo $db['nama_bidang']; ?><span class="checkmark"></span></label><br>
			   <?php 
					}
				?>
			     <?php
					include 'koneksi.php';
					$databidang = mysqli_query($koneksi,"select * from tb_bidang where id_bidang='2'");
					while($db = mysqli_fetch_array($databidang)){
						?>
			     <label class="container"><input type="checkbox" class="radio" name="bidang" value="<?php echo $db['nama_bidang']; ?>"><?php echo $db['nama_bidang']; ?><span class="checkmark"></span></label><br>
			   <?php 
					}
				?>
			     <?php
					include 'koneksi.php';
					$databidang = mysqli_query($koneksi,"select * from tb_bidang where id_bidang='3'");
					while($db = mysqli_fetch_array($databidang)){
						?>
			     <label class="container"><input type="checkbox" class="radio" name="bidang" value="<?php echo $db['nama_bidang']; ?>"><?php echo $db['nama_bidang']; ?><span class="checkmark"></span></label><br>
			   <?php 
					}
				?>
			     <?php
					include 'koneksi.php';
					$databidang = mysqli_query($koneksi,"select * from tb_bidang where id_bidang='4'");
					while($db = mysqli_fetch_array($databidang)){
						?>
			     <label class="container"><input type="checkbox" class="radio" name="bidang" value="<?php echo $db['nama_bidang']; ?>"><?php echo $db['nama_bidang']; ?><span class="checkmark"></span></label><br>
			   <?php 
					}
				?>

				<input type="submit" class="tambah" value="submit">

	</form>
	<a href="halaman_admin.php"><button class="kembali">kembali</button></a>
	</div>
</body>
<script type="text/javascript">
	// the selector will match all input controls of type :checkbox
	// and attach a click event handler 
	$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
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
<style type="text/css">
	/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 5px;
	left: 5px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

</style>
