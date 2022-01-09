<?php session_start();
if(isset($_SESSION["is_tutor"]) && $_SESSION["is_tutor"]==1){
    // header("./pages/tutor/index.php");
    echo "<script type='text/javascript'>location.href='./pages/tutor/index.php'</script>";
}
// session_destroy();
?>
<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280, initial-scale=1">
    <meta name="description" content="Pelitaku Homepage">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Pelitaku </title>
    <link rel="icon" href="./assets/png/icon_pelitaku1.png">

</head>

<body>
    <?php include './assets/php/header.php';?>

    <div class="background">
        <div class="maincontent">
            <form action="../../pages/tutee/search_subject.php" method="get">
                <?php include './assets/php/searchbar.php'; ?>
            </form>
            <img src="./assets/png/banner1.png" alt="Banner Yuk Belajar Bareng" style="width: 1024px; height: 378px;">

            <div class="caption"> 
				<p> Kami memiliki puluhan tutor yang siap membimbingmu dalam belajar. </p>
				<p> Belajar Desain dengan tutor pilihan kami. </p> 
			</div>

            <?php include './assets/php/specialpicks.php'; ?>

            <img src="./assets/png/banner2.png" alt="banner 2" style="width: 1024px; height: 378px;">

			<div>
				<p class="caption"> Mata kuliah tren: </p>
				
				<form action="../../pages/tutee/search_subject.php" method="get">
					<div class="flex-container-column row-gap-20">
						<div class="flex-container-row column-gap-20">
							<input type="submit" name="subject" class="primary1" value="Desain"></input>
							<input type="submit" name="subject" class="primary1" value="Gambar Teknik"></input>
							<input type="submit" name="subject" class="primary1" value="Studio Desain"></input>
							<input type="submit" name="subject" class="primary1" value="Ergonomi"></input>
							<input type="submit" name="subject" class="primary1" value="Fotografi"></input>
						</div>
						<div class="flex-container-row column-gap-20">
							<input type="submit" name="subject" class="primary1" value="Sejarah"></input>
							<input type="submit" name="subject" class="primary1" value="Presentasi Desain"></input>
							<input type="submit" name="subject" class="primary1" value="Ekonomi"></input>
							<input type="submit" name="subject" class="primary1" value="Ekonomi Mikro"></input>
							<input type="submit" name="subject" class="primary1" value="Desain UI"></input>
						</div>
					</div>
				</form>
			</div>
            
			<form action="../../pages/tutee/search_subject.php" method="get" class="push">
				<button class="secondary"> lihat semua kelas </button>
			</form>

            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 5</div> <!-- Biar keliatan pindah -->
                    <img src="./assets/png/banner3.png" alt="banner 3" style="width: 1024px; height: 376px;">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 5</div>
                    <img src="./assets/png/banner4.png" alt="banner 3" style="width: 1024px; height: 376px;">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 5</div>
                    <img src="./assets/png/banner3.png" alt="banner 3" style="width: 1024px; height: 376px;">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 5</div>
                    <img src="./assets/png/banner4.png" alt="banner 3" style="width: 1024px; height: 376px;">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">5 / 5</div>
                    <img src="./assets/png/banner3.png" alt="banner 3" style="width: 1024px; height: 376px;">
                </div>
                <div class="dotgroup">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>

			<form action="../../pages/tutee/grouptutor_list.php" method="get" class="push">
				<button class="secondary"> lihat semua </button>
			</form>

        </div>
    </div>
    <?php include './assets/php/footer.php'; ?>

    <script src="./script.js" type="application/javascript"></script>
</body>

</html>