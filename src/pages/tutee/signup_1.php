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

    <?php include '../../assets/php/header.php'?>

    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>

    <div class="flex-container-row flex-center margin-bottom-82">
        <div class="flex-container-row">
            <div class="roadmap">
                <object data="../../assets/svg/signup_tutee_roadmap_1.svg" type=""></object>
            </div>
            <form class="form flex-container-column max-width-600 min-width-550 row-gap-20" >
                <div class="flex-container-row name column-gap-20">
                    <input required class="width-248" type="text" placeholder="Nama Depan" id="tuteeFirstName">
                    <input required class="width-248" type="text" placeholder="Nama Belakang" id="tuteeLastName">
                </div>
                <div class="flex-container-row phone-number column-gap-20">
                    <input required class="width-50 country-code" type="text" value="+62" disabled>
                    <input required class="width-440" type="text" placeholder="Nomor Ponsel" id="tuteePhoneNumber">
                </div>
                <input required class="email width-504" type="email" placeholder="E-mail" id="tuteeEmail">
                <input required class="password width-504" type="password" placeholder="Kata Sandi" id="tuteePassword">
                <input required class="password width-504" type="password" placeholder="Ulangi Kata Sandi" id="tuteeConfirmPassword">
                <div class="flex-container-row flex-center column-gap-40">
                    <input class="button continue" type="submit" value="Selanjutnya" id="next">
                    <input class="button abort" type="button" value="Batal" id="cancel">
                </div>
            </form>
        </div>
    </div>
    <?php include '../../assets/php/footer.php' ?>

</body>

</html>