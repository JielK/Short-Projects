<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodylogin">
 
	<h1 class="h1login">Login</h1>
	<img src="img/moon.png" id="icon" class="nav-item theme">
 
	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="proses.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 			
 			<br/>
 			<br/>

			
		</form>
		<center>
				<a class="link" href="https://pornhub.com"><button>kembali</button></a>
			</center>
       
	</div>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
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
  		
</body>
<style>
	
.alert{
	background: red;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}

</style>

</html>