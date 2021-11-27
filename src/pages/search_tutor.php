<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>

<body>

    <?php include '../assets/php/header.php'; ?>
	
	<div class="background">
		<div class="maincontent">
			<?php include '../assets/php/searchbar.php';?>
			
			<div class="searchtitle">
                <h2>
                    Tutor Desain Produk 1 yang tersedia berdasarkan
                </h2>
                <select class="search-filter" name="cars" id="cars">
                    <option value="terdekat">Terdekat</option>
                    <option value="penilaian">Penilaian</option>
                    <option value="tingkat">Tingkat</option>
                </select>
				<div class="position-relative">
					<form action="">
						<input type="text" placeholder="Cari lokasi" class="input-location">
						<input src="../assets/png/icon_gps.png" alt="Icon magnifying glass" class="gps-icon" type="image" style="border: none">
					</form>
				</div>
            </div>
			
			<div class="specialpicks">
                <div>
                    <h3>Special Pick</h3>
                </div>
                <div class="tutorpilihan flex-between">
					<div>
						<img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
					<div>
						<img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
                    <div>
						<img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
					<div>
						<img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
                </div>
            </div>
			
			<div class="search-result">
				<div>
					<div class="flex-container-row" style="align-content:center;">
						<div style="margin: auto 80px auto 0;"> 
							<img src="../assets/png/avatar.jpg" alt="" class="avatar" width="45px">
						</div>
						<div class="position-relative">
                            <div class="star-grey"> <img src="../assets/png/starbar_grey.png" alt="grey stars"> </div>
                            <div class="star-yellow"> <img src="../assets/png/starbar_yellow.png" alt="yellow stars"> </div>
                        </div>
					</div>
					<hr width="100%" style="margin:5px 0 5px 0;">
					<div>
						<p>Desain Produk, 2018</p>
						<b>Calvin</b>
						<p>Cengkareng, Jakarta Barat</p>
					</div>
				</div>

			</div>
			
			<div class="search-nav" align="right">
                <input class="navimage" type="submit" style="background-image: url(../assets/png/icon_left.png);" value="" href=""></input>
                <input type="submit" href="" value="1"></input>
                <input type="submit" href="" value="."></input>
                <input type="submit" href="" value="."></input>
                <input class="navimage" type="submit" style="background-image: url(../assets/png/icon_right.png)" value="" href=""></input>
            </div>
			
		</div>
	</div>

    <?php include "../assets/php/footer.php"; ?>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>