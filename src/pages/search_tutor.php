<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/profile.css">
    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>

<body class="background">
    <img src="../assets/png/icon_message.png" alt="" class="message-icon">
    <!-- <div class="header">
        <object data="../assets/svg/icon_pelitaku.svg" type="" class="header-icon"></object>
        <p class="push">pembelajaran</p>
        <p>inbox</p>
        <p>profil</p>
    </div> -->
    <?php include "../assets/php/header.php"; ?>

    <div class="flex-container-column flex-center margin-top-82 margin-bottom-82 row-gap-40">
        <div class="flex-container-row flex-center column-gap-20">
            <object data="../assets/svg/logo_pelitaku.svg" type="" width="204px" height="67.14px"></object>
            <div class="position-relative">
                <form action="">
                    <input type="text" placeholder="Cari lokasi" class="input-location">
                    <input src="../assets/png/icon_gps.png" alt="Icon magnifying glass" class="search-icon" type="image" style="border: none">
                </form>
            </div>
            <div class="position-relative">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                    <input type="text" placeholder="Cari subjek...." class="input-subject" name="subject">
                    <input src="../assets/png/icon_search.png" alt="Icon magnifying glass" class="search-icon" type="image" style="border: none">
                </form>
            </div>
        </div>
        <div class="flex-container-column row-gap-40 width-1280">
            <div class="flex-container-row column-gap-20">
                <h1 class="margin-left-150">
                    Tutor Desain Produk 1 yang tersedia berdasarkan
                </h1>
                <select class="search-filter" name="cars" id="cars">
                    <option value="terdekat">Terdekat</option>
                    <option value="penilaian">Penilaian</option>
                    <option value="tingkat">Tingkat</option>
                </select>
            </div>
            <div class="flex-container-column column-gap-20 tutor-border">
                <div class="margin-left-90">
                    <h2>Special Pick</h2>
                </div>
                <div class="flex-container-row flex-center tutor-images">
                    <div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                        <img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                        <div style="position: absolute; bottom: 0px; left: 0px;"><img src="../assets/png/white_overlay.png" alt=""></div>
                        <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                        <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                        <div style="position: absolute;bottom: 35px; left: 110px; "><img src="../assets/png/starbar_grey.png" alt="grey stars"></div>
                        <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                            <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                        </div>
                    </div>
                    <div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                        <img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                        <div style="position: absolute; bottom: 0px; left: 0px;"><img src="../assets/png/white_overlay.png" alt=""></div>
                        <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                        <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                        <div style="position: absolute;bottom: 35px; left: 110px; "><img src="../assets/png/starbar_grey.png" alt="grey stars"></div>
                        <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                            <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                        </div>
                    </div>
                    <div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                        <img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                        <div style="position: absolute; bottom: 0px; left: 0px;"><img src="../assets/png/white_overlay.png" alt=""></div>
                        <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                        <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                        <div style="position: absolute;bottom: 35px; left: 110px; "><img src="../assets/png/starbar_grey.png" alt="grey stars"></div>
                        <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                            <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                        </div>
                    </div>
                    <div style=" width: 200px; height:270px; position: relative; margin: 0; padding: 0%;">
                        <img src="../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
                        <div style="position: absolute; bottom: 0px; left: 0px;"><img src="../assets/png/white_overlay.png" alt=""></div>
                        <div style="position: absolute;bottom: 25px;right: 16px; color: black;font-weight: 600;">Claresta Y. Halim</div>
                        <div style="position: absolute;bottom: 8px;right: 16px; color: black;">Desain Produk, 2019</div>
                        <div style="position: absolute;bottom: 35px; left: 110px; "><img src="../assets/png/starbar_grey.png" alt="grey stars"></div>
                        <div style="position: absolute;bottom: 35px; left: 110px;  width: 81px; overflow: hidden;">
                            <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-container-row">
                <div class="flex-container-column tutor-small-box" style="position: relative;">
                    <div class="flex-container-row flex-between">
                        <div class="image-container">
                            <div class="circle width-45 height-45"></div>
                        </div>
                        <div><img src="../assets/png/starbar_grey.png" alt="grey stars"></div>
                        <div style="z-index: 10;">
                            <img src="../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;">
                        </div>
                    </div>
                    <hr class="line">
                    <div>Desain Produk, 2018</div>
                    <div>Calvin</div>
                    <div>Cengkareng, Jakarta Barat</div>
                </div>
            </div>
            <div>

            </div>
            <div class="search-nav" align="right">
                <a href=""><img src="../assets/png/icon_left.png" alt=""></a>
                <a href="">1</a>
                <a href="">.</a>
                <a href="">.</a>
                <a href=""><img src="../assets/png/icon_right.png" alt=""></a>
            </div>
        </div>
    </div>



    <?php include "../assets/php/footer.php"; ?>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>