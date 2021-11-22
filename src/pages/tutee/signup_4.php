<?php
if (!isset($_SESSION)) {
    session_start();
}
if(isset($_SESSION['id'])){
    echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
    
</head>

<body class="flex-container-columns">
    <?php
    include '../../assets/php/header.php';
    ?>
   
    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>
    <div class="flex-container-column flex-center margin-bottom-82 margin-top-82">
        <div class="width-1280">
            <div class="flex-container-column margin-left-150">
                <div class="flex-start commitment-image">
                    <object data="../../assets/svg/signup_tutee_roadmap_4.svg" type=""></object>
                </div>
            </div>
            <div>

            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <img class="commitment-image" src="../../assets/png/signup_tutee_commitment_1.png" alt="">
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
                    <img class="commitment-image" src="../../assets/png/signup_tutee_commitment_2.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="flex-container-row flex-center column-gap-40">
                    <img class="commitment-image" src="../../assets/png/signup_tutee_commitment_3.png" alt="">
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
                    <img class="commitment-image" src="../../assets/png/signup_tutee_commitment_4.png" alt="">
                </div>
            </div>
            <div class="flex-container-row flex-center width-full column-gap-40 margin-top-82">
                <div class="commitment width-504">
                    <div class="font-size-20">
                        <p>Saya akan</p>
                        <ul>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-will-1" name="i-will-1"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-will-2" name="i-will-2"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-will-3" name="i-will-3"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-will-4" name="i-will-4"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-will-5" name="i-will-5"></li>
                        </ul>
                    </div>
                </div>
                <div class="commitment width-504">
                    <div class="font-size-20">
                        <p>Saya tidak akan</p>
                        <ul>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-1" name="i-wont-1" value="Menggunakan Ponsel Selama Belajar" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-2" name="i-wont-2"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-3" name="i-wont-3"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-4" name="i-wont-4"></li>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-5" name="i-wont-5"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="buttons width-full flex-container-row flex-center margin-top-82 column-gap-40">
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