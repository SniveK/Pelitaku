<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/login.css">

    <!-- <link rel="stylesheet" href="../../css/signup_tutor.css"> -->
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
            <div class=" roadmap">
                <object data="../../assets/svg/signup_tutor_roadmap_4.svg" type=""></object>
            </div>
            <form class="form flex-container-column max-width-600 min-width-550 row-gap-20">
                <textarea class="width-504 height-300 reason-text-area" placeholder="Ceritakan tujuan anda mendaftar menjadi tutor" id="address"></textarea>
                <input class="width-504" type="text" placeholder="Kecamatan">
                <div class="buttons">
                    <input class="button continue" type="button" value="Selanjutnya">
                    <input class="button abort" type="button" value="Batal">
                </div>
            </form>
        </div>
    </div>

    <?php include '../../assets/php/footer.php' ?>

</body>

</html>