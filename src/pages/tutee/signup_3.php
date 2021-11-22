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
    <?php include '../../assets/php/header.php' ?>
    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>
    <div class="flex-container-row flex-center margin-bottom-82">
        <div class="flex-container-row">
            <div class="roadmap">
                <object data="../../assets/svg/signup_tutee_roadmap_3.svg" type=""></object>
            </div>
            <div class="form flex-container-column max-width-600 min-width-550 row-gap-20">
                <div class="flex-container-row name column-gap-20">
                    <input required class="width-248" type="text" placeholder="Nama Depan" id="parentFirstName">
                    <input required class="width-248" type="text" placeholder="Nama Belakang" id="parentLastName">
                </div>
                <div class="flex-container-row phone-number column-gap-20">
                    <input required class="width-50 country-code" type="text" value="+62" disabled>
                    <input required class="width-440" type="text" placeholder="Nomor Ponsel" id="parentPhoneNumber">
                </div>
                <input required class="email width-504" type="email" placeholder="E-mail" id="parentEmail">
                <div class="flex-container-row flex-center column-gap-40">
                    <input class="button continue" type="submit" value="Selanjutnya" id="next">
                    <input class="button abort" type="button" value="Batal" id="cancel">
                </div>
            </div>
        </div>
    </div>
    <?php
    include '../../assets/php/footer.php'
    ?>
</body>

</html>