<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/login.css">
    <!-- <link rel="stylesheet" href="../../css/signup_tutor.css">\ -->
</head>

<body class="flex-container-columns">

    <?php
    include "../../assets/php/header.php";
    ?>

    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>

    <div class="flex-container-row flex-center margin-bottom-82">
        <div class="flex-container-row">
            <div class="roadmap">
                <object data="../../assets/svg/signup_tutor_roadmap_1.svg" type=""></object>
            </div>

            <form class="form flex-container-column max-width-600 min-width-550 row-gap-20">
                <div class="flex-container-row name column-gap-20">
                    <input class="width-248" type="text" placeholder="Nama Depan" id="tuteeFirstName">
                    <input class="width-248" type="text" placeholder="Nama Belakang" id="tuteeLastName">
                </div>
                <div class="flex-container-row phone-number column-gap-20">
                    <input class="width-50 country-code" type="text" value="+62" disabled>
                    <input class="width-440" type="text" placeholder="Nomor Ponsel" id="tuteePhoneNumber">
                </div>
                <input class="email width-504" type="email" placeholder="E-mail" id="tuteeEmail">
                <input class="password width-504" type="password" placeholder="Kata Sandi" id="tuteePassword">
                <input class="password width-504" type="password" placeholder="Ulangi Kata Sandi" id="tuteeConfirmPassword">

                <div class="buttons">
                    <input class="button continue" type="button" value="Selanjutnya">
                    <input class="button abort" type="button" value="Batal">
                </div>
            </form>
        </div>
    </div>

    <footer class="flex-container-column flex-center footer">
        <div class="flex-container-row flex-between footer-menu">
            <ul class="footer-menu__left">
                <li><b>Tentang</b></li>
                <li>Siapa kami? </li>
                <li>Syarat dan Ketentuan</li>
                <li>Kebijakan Privasi</li>
                <li>FAQ</li>
            </ul>
            <ul class="footer-menu__center">
                <li><b>Kelas</b></li>
                <li>Mulai Kelas</li>
                <li>Lihat subjek kami</li>
            </ul>
            <ul class="footer-menu__right">
                <li><b>Menjadi tutor</b></li>
                <li>Keuntungan menjadi tutor</li>
                <li>Daftar menjadi tutor</li>
                <li>Masuk</li>
            </ul>
        </div>
        <div class="width-1280">
            <hr class="line">
            <p align="center">© Pelitaku, 2021</p>
        </div>
    </footer>
</body>

</html>