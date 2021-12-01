<!DOCTYPE html>

<html lang="id" >

    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="../css/formgrouptutor.css">
		
		<title> Pelitaku </title>
		<link rel="icon" href="logo.png">
		
    </head>
	
    <body>

	<div class='header'>
		<div class='headercontent'>
			<object data='../../assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
			<div>
				<a href=''>pembelajaran</a>
				<a href=''>jadwal</a>
				<a href=''>inbox</a>
				<a href='../../pages/tutor/profile.php'>profil</a>
			</div>
		</div>
	</div>
		
	<div class="background">
		<div class="maincontent">
			<div>
				<p class="title"> Buat Group Tutoring </p>
				<hr width="100%" style="margin: 10px 0 0 0;">
			</div>
			<input type="text" placeholder="Mata Kuliah"></input>
			<input type="text" placeholder="Topik Group Tutoring"></input>
			<div class="flex-container-row"> 
				<p style="width: 150px;">Jumlah Tutee</p>
				<input type="number" min="1" max="5" style="width:160px;">
			</div>
			<div class="flex-container-row">
				<p style="width: 150px;">Tanggal & Jam</p>
				<button class="primary2">Atur</button>
			</div>
			<textarea style="height:257px; padding: 10px; resize:none;" placeholder="Deskripsikan apa saja yang akan dipelajari pada sesi tutor ini....."></textarea>
			<p style="opacity: 0.8;">Upload Poster Event (ukuran 1024x376px)</p>
			<div class="dragarea">
				<p> Drag & Drop or <input type="button" id="browse" value="Browse"> </input> </p>
				<input type="file" id="filein" hidden>
			</div>	
		</div>
	</div>
		
		<footer class="footer">
			<div class="footermenu">
				<div> 
					<b>Tentang</b> </br>
					<a href='../../pages/who_are_we.php'>Siapa kami? </a> </br>
					<a href='../../pages/terms_conditions.php'>Syarat dan Ketentuan</a> </br>
					<a href='../../pages/privacy_policy.php'>Kebijakan Privasi</a> </br>
					<a href='../../pages/faq.php'>FAQ</a> </br>
				</div>
				<div>
					<b>Kelas</b> </br>
					<a href=''>Mulai Kelas</a> </br>
					<a href=''>Lihat subjek kami</a> </br>
				</div>
				<div align="right"> 
					<b>Menjadi tutor</b> </br>
					<a href='../../pages/tutor/benefit.php'>Keuntungan menjadi tutor</a> </br>
				</div>
			</div>
			<div>
				<hr class="line">
				<p align="center">© Pelitaku, 2021</p>
			</div>
		</footer>
		
		<script src="../scripts/dragandrop.js"></script>
		
    </body>

</html>
