<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../css/signup_tutee.css"> -->
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body class="flex-container-columns">
    <?php
    include '../../assets/php/header.php';
    ?>
    <!-- <header class="header">
        <nav class="nav">
            <object data="../../assets/svg/icon_pelitaku.svg" type="" width="28px"></object>
        </nav>
    </header> -->
    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>
    <div class="flex-container-column flex-center margin-bottom-82 margin-top-82">
        <div class="width-1280">
            <div class="flex-container-column margin-left-150">
                <div class="flex-start width-full">
                    <object data="../../assets/svg/signup_tutee_roadmap_4.svg" type=""></object>
                </div>
            </div>
            <div>

            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <img class="width-full" src="../../assets/png/signup_tutee_commitment_1.png" alt="">
                    <div class="card__text text-align-left font-size-20">
                        <h1>Untuk membangun komitmen bersama</h1>
                        <p> Jika kita terbiasa untuk membangun komitmen sejak dini, di dunia kerja nanti akan membantu kita untuk tetap disiplin.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <div class="card__text text-align-right font-size-20">
                        <h1> Agar lebih berkonsentrasi</h1>
                        <p> Dengan mengurangi distraksi, dapat meningkatkan konsentrasi kita dan menaikkan efektivitas belajar lho
                        <p>
                    </div>
                    <img class="width-full" src="../../assets/png/signup_tutee_commitment_2.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <img class="width-full" src="../../assets/png/signup_tutee_commitment_3.png" alt="">
                    <div class="card__text text-align-left font-size-20">
                        <h1>Menghargai tutor</h1>
                        <p> Dengan mematuhi komitmen yang kita buat, kita juga jadi lebih menghargai tutor yang mengajar lho. Jadi mereka juga jadi lebih semangat mengajari kita. </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <div class="card__text text-align-right font-size-20">
                        <h1>Perjanjian untuk semua sesi</h1>
                        <p>Komitmen yang kalian tulis sekarang harus kalian tepati di semua sesi tutoring melalui platfotm Pelitaku.</p>
                    </div>
                    <img class="width-full" src="../../assets/png/signup_tutee_commitment_4.png" alt="">
                </div>
            </div>
            <div class="flex-container-row flex-center width-full column-gap-40 margin-top-82">
                <div class="commitment width-504">
                    <div class="font-size-20">
                        <p>Saya akan</p>
                        <ul>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                        </ul>
                    </div>
                </div>
                <div class="commitment width-504">
                    <div class="font-size-20">
                        <p>Saya tidak akan</p>
                        <ul>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                            <li><input class="font-size-20 width-95-percent" type="text"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="buttons width-full flex-container-row flex-center">
                <input class="button continue" type="button" value="Selanjutnya">
                <input class="button abort" type="button" value="Batal">
            </div>
        </div>
    </div>

    <?php
    include '../../assets/php/footer.php'
    ?>
</body>

</html>