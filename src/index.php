<?php session_start(); 
// session_destroy();
?>
<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1280, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>
<div></div>
<body>
    <?php include './assets/php/header.php';
    ?>

    <img src="./assets/png/icon_message.png" alt="Icon Pelitaku" class="message-icon">

    <div class="background">
        <div class="maincontent">
            <?php include './assets/php/searchbar.php';
            ?>
            <img src="./assets/png/banner1.png" alt="Banner Yuk Belajar Bareng" width="100%">

            <div class="caption"> Kami memiliki puluhan tutor yang siap membimbingmu dalam belajar. </div>
            <div class="caption"> Belajar Desain dengan tutor pilihan kami </div>

            <div class="tutorpilihan">
                <div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname"> Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>

                <div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname"> Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>

                <div>
                    <img src="./assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                    <div class="tutorpic"> <img src="./assets/png/white_overlay.png" alt=""> </div>
                    <div class="tutorname"> Claresta Y. Halim </div>
                    <div class="tutormajor"> Desain Produk, 2019 </div>
                    <div class="starratinggrey"> <img src="./assets/png/starbar_grey.png" alt="grey stars"> </div>
                    <div class="starratingyellow"> <img src="./assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
                </div>

            </div>

            <img src="./assets/png/banner2.png" alt="" width="100%">

            <p class="caption"> Mata kuliah tren: </p>

            <div>
                <button class="primary1"> Desain </button>
                <button class="primary1"> Gambar Teknik </button>
                <button class="primary1"> Studio Desain </button>
                <button class="primary1"> Ergonomi </button>
                <button class="primary2"> Ergonomi </button>
                </br>
                <button class="primary1"> Sejarah </button>
                <button class="primary1"> Presentasi Desain </button>
                <button class="primary1"> Ekonomi </button>
                <button class="primary1"> Ekonomi Mikro </button>
                <button class="primary2"> Ekonomi Mikro </button>
            </div>
            <button class="secondary"> lihat semua kelas </button>
            <img src="./assets/png/banner3.png" alt="" width="100%">
        </div>
    </div>
    <?php include './assets/php/footer.php'; ?>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>