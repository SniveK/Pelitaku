<?php session_start();?>
<!DOCTYPE html>

<html lang="id" >

    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=1280, initial-scale=1">
        <link rel="stylesheet" href="style.css">
		
		<title> Pelitaku </title>
		<link rel="icon" href="logo.png">

    </head>
	<?php include './assets/php/header.php'; ?>
    <?php include './assets/php/searchbar.php'; ?>

    <body class="background" >
        <img src="./assets/png/icon_message.png" alt="Icon Pelitaku" class="message-icon">
		
		<div class="maincontent" align="center">
			<img src="./assets/png/banner1.png" alt="Banner Yuk Belajar Bareng" width="100%">
			
			<p class="caption"> Kami memiliki puluhan tutor yang siap membimbingmu dalam belajar. </p>
			<p class="caption"> Belajar Desain dengan tutor pilihan kami </p>
			
			<div class="tutorpilihan">
                <div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname">	Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>
				
				<div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname">	Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>
				
				<div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname">	Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>
				
			</div>
			
			<div style="height: 60px;"></div>
			<img src="./assets/png/banner2.png" alt="" width="100%">
			
			<p class="caption" style="padding-right: 40%;"> Mata kuliah tren: </p>
			
			<div>
				<button class="primary2" style="width = 10vw"> Desain </button>
				<button class="primary2"> Gambar Teknik </button>
				<button class="primary2"> Studio Desain </button>
				<button class="primary2"> Ergonomi </button>
				<button class="primary"> Ergonomi </button>
				</br>
				<button class="primary2"> Sejarah </button>
				<button class="primary2"> Presentasi Desain </button>
				<button class="primary2"> Ekonomi </button>
				<button class="primary2"> Ekonomi Mikro </button>
				<button class="primary"> Ekonomi Mikro </button>
			</div>
			
			<button class="secondary"> lihat semua kelas </button>
			
            <div style="height: 20px;"></div>
			<img src="./assets/png/banner3.png" alt="" width="100%">
			<div style="height: 20px;"></div>

			</br>
			
		</div>
        <?php include './assets/php/footer.php'; ?>
		
        <script src="script.js" type="application/javascript"></script>
    </body>
</html>
