<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Whatsapp Web Design using Html & CSS</title>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
	<div class="container">
		<div class="leftSide">
			<!-- header -->
			<div class="header">
				<div class="userimg">
					<img src="assets/imgs/user.jpg" class="cover">
				</div>
				<ul class="nav_icons">
					<li><ion-icon name="scan-circle-outline"></ion-icon></li>
					<li><ion-icon name="chatbox"></ion-icon></li>
					<li><ion-icon name="ellipsis-vertical"></ion-icon></li>
				</ul>
			</div>
			<!-- search -->
			<div class="search_chat">
				<div>
					<input type="text" placeholder="Search or start new chat">
					<ion-icon name="search"></ion-icon>
				</div>
			</div>
			<!-- chat list -->
			<div class="chatlist">
				<div class="block" onclick="window.location='index.php?c=c1';">
					<div class="imgbx">
						<img src='assets/imgs/img1.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Muhammad Shayan</h4>
							<p class="time">10:56</p>
						</div>
						<div class="message_p">
							<p>😂😂😂😂😂</p>
						</div>
					</div>
				</div>
				<div class="block unread" onclick="window.location='index.php?c=c2';">
					<div class="imgbx">
						<img src='assets/imgs/img2.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Ashraf</h4>
							<p class="time">9:25</p>
						</div>
						<div class="message_p">
							<p>Hi, i found you on youtubeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee eeeee</p>
							<b>1</b>
						</div>
					</div>
				</div>
				<div class="block unread" onclick="window.location='index.php?c=c3';">
					<div class="imgbx">
						<img src='assets/imgs/imgg.png'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Gandhi Alfonsus Sihotang</h4>
							<p class="time">9:00</p>
						</div>
						<div class="message_p">
							<p>Cepat kumpul tugas toko online nya</p>
							<b>1</b>
						</div>
					</div>
				</div>
				<div class="block unread" onclick="window.location='index.php?c=c4';">
					<div class="imgbx">
						<img src='assets/imgs/img3.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Olivia</h4>
							<p class="time">Yesterday</p>
						</div>
						<div class="message_p">
							<p>Send for processing</p>
							<b>2</b>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c5';">
					<div class="imgbx">
						<img src='assets/imgs/img4.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Amelia</h4>
							<p class="time">Yesterday</p>
						</div>
						<div class="message_p">
							<p>Hello, world!</p>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c6';">
					<div class="imgbx">
						<img src='assets/imgs/img5.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Rahul Kumar</h4>
							<p class="time">Yesterday</p>
						</div>
						<div class="message_p">
							<p>oh okay, hope you get better soon</p>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c7';">
					<div class="imgbx">
						<img src='assets/imgs/img6.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Joseph</h4>
							<p class="time">08/10/2021</p>
						</div>
						<div class="message_p">
							<p>Nice to talk with you</p>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c8';">
					<div class="imgbx">
						<img src='assets/imgs/img7.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Diana</h4>
							<p class="time">08/10/2021</p>
						</div>
						<div class="message_p">
							<p>How to make whatsapp clone using html and css</p>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c9';">
					<div class="imgbx">
						<img src='assets/imgs/img8.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Kabir</h4>
							<p class="time">07/10/2021</p>
						</div>
						<div class="message_p">
							<p>Happy Birthday!</p>
						</div>
					</div>
				</div>
				<div class="block" onclick="window.location='index.php?c=c10';">
					<div class="imgbx">
						<img src='assets/imgs/img9.jpg'class="cover"></img>
					</div>
					<div class="details">
						<div class="listHead">
							<h4>Alina Smith</h4>
							<p class="time">05/10/2021</p>
						</div>
						<div class="message_p">
							<p>Thank You for the Help</p>
						</div>
					</div>
				</div>

			</div>
		</div>




		<div class="rightSide">
			<?php  
			if ( isset($_GET['c']) && $_GET['c']=="c1") {
    		include('assets/php/c1.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c2") {
    		include('assets/php/c2.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c3") {
    		include('assets/php/c3.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c4") {
    		include('assets/php/c4.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c5") {
    		include('assets/php/c5.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c6") {
    		include('assets/php/c6.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c7") {
    		include('assets/php/c7.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c8") {
    		include('assets/php/c8.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c9") {
    		include('assets/php/c9.php');
			} 
			if ( isset($_GET['c']) && $_GET['c']=="c10") {
    		include('assets/php/c10.php');
			} 
			?>
		</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
