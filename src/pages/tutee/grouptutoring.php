<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="id" >

    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/grouptutoring.css">
		<link rel="stylesheet" href="../../style.css">
		
		<title> Pelitaku </title>
		<link rel="icon" href="../../assets/png/icon_pelitaku1.png">
		
    </head>
	
    <body class="background">

        <?php include '../../assets/php/header.php';?>
		
		<div class="maincontent"> <!--style="padding: 22px 10% 36px 10%"-->
			<div>
				<h2> Group Tutoring </h2>
				<hr width="100%" style="margin: 10px 0 10px 0;">
			</div>
			<img src="../../assets/png/banner3.png" alt="" width="100%">
			<div> 
				<b> Studio Desain Dasar </b>
				<p> Nirmana Kayu </p> 
			</div>
			<div style="display: flex;">
				
				<div class="tutorpilihan" style="margin-right: 20px"> <div>
					<img src="../../assets/png/profil_kosong.png" alt="Gambar Tutor" style="width: 208px; height: 272px;">
					<div class="tutorpic"> <img src="../../assets/png/white_overlay.png" alt="white overlay" style="width: 200px; height: 60px;"> </div>
					<div class="tutorname"> Nama Tutor </div>
					<div class="tutormajor"> Jurusan, 20XX </div>
					<div class="starratinggrey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" style="width: 81px; height: 22px; margin-left: 0px;"> </div>
					<div class="starratingyellow" style="width: 65px"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; height: 22px; margin-left: 0px;"> </div>
				</div> </div>
				
				<div style="font-size:16px">
					<p> Kuota jumlah peserta: 3 orang </p>
					<p> Rabu, 20 Oktober 2021 </p>
					<p> 16:30-18:30 WIB</p>
					<p> Sesi pada kelas ini akan menjelaskan tentang Nirmana Trimata dan teknik dasar dalam kerajinan kayu. </p>
					<p> Barang dan alat yang perlu disiapkan: </p>
					<ol>
					  <li>Kayu Meranti</li>
					  <li>Gergaji</li>
					  <li>Amplas (400, 600, 800, 1000, 2000)</li>
					  <li>Masker</li>
					  <li>Kacamata</li>
					</ol>
				</div>
			</div>
			</br>
			<div align="right">
				<button class="primary"> Daftar </button> 
				<button onclick="history.back()" class="primarywhite"> Batal </button>
			</div>
		</div>
		
		<?php include '../../assets/php/footer.php'; ?>
		
    </body>

</html>
