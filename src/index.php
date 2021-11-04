<!DOCTYPE html>

<html lang="id" >

    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
		
		<title> Pelitaku </title>
		<link rel="icon" href="logo.png">
		
    </head>
	
	<?php include './assets/php/header.php'; ?>

    <body class="background" >
        <img src="./assets/png/icon_message.png" alt="Icon Pelitaku" class="message-icon">
        <?php
        // phpinfo();
        // $connection = new PDO('mysql:host=mysql;dbname=demo;charset=utf8', 'root', 'root');
        // $connection = new mysqli_connect("localhost", "root", "root","demo");
        $conn = mysqli_connect('172.25.0.2', 'general', 'general');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        // $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        // $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        // if (empty($tables)) {
        //     echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        // } else {
        //     echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
        //     echo '<ul class="center">';
        //     foreach ($tables as $table) {
        //         echo "<li>{$table}</li>";
        //     }
        //     echo '</ul>';
        // }
        ?>

		<div class="maincontent" align="center">
			<div class="searchbar" >
                <object data="./assets/svg/logo_pelitaku.svg" type="" width="204px" height = "67.14px"></object>
				<div>
					<input type="text" placeholder="Cari lokasi" class="input-location" >
                    <img src="./assets/png/icon_gps.png" alt="Icon GPS" class="search-icon">
                </div>
				<div>
                    <input type="text" placeholder="Cari subjek...." class="input-subject">
                    <img src="./assets/png/icon_search.png" alt="Icon magnifying glass" class="search-icon">
                </div>
			</div>
			<div style="height: 20px;"></div>
			<img src="./assets/png/banner1.png" alt="Banner Yuk Belajar Bareng" width="100%">
			
			<p class="caption"> Kami memiliki puluhan tutor yang siap membimbingmu dalam belajar. </p>
			<p class="caption"> Belajar Desain dengan tutor pilihan kami </p>
			
			<div class="tutorpilihan">
                <div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div style="position: absolute; bottom: 0px; left: 0px;"><img src="./assets/png/white_overlay.png" alt=""></div>
                    <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                    <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                    <div style="position: absolute;bottom: 35px; left: 110px; "><img src="./assets/png/starbar_grey.png" alt="grey stars"></div>
                    <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                        <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                    </div>
                </div>
                
				<div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div style="position: absolute; bottom: 0px; left: 0px;"><img src="./assets/png/white_overlay.png" alt=""></div>
                    <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                    <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                    <div style="position: absolute;bottom: 35px; left: 110px; "><img src="./assets/png/starbar_grey.png" alt="grey stars"></div>
                    <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                        <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                    </div>
                </div>

				<div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px" >
                    <div style="position: absolute; bottom: 0px; left: 0px;"><img src="./assets/png/white_overlay.png" alt=""></div>
                    <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                    <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                    <div style="position: absolute;bottom: 35px; left: 110px; "><img src="./assets/png/starbar_grey.png" alt="grey stars"></div>
                    <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                        <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                    </div>
                </div>
                
			</div>
			<div style="height: 60px;"></div>
			<img src="./assets/png/banner2.png" alt="" width="100%">
			
			<p class="caption" style="padding-right: 40%;"> Mata kuliah tren: </p>
			
			<div>
				<button class="primary2" > Desain </button>
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
