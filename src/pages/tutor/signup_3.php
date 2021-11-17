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
                <object data="../../assets/svg/signup_tutor_roadmap_3.svg" type=""></object>
            </div>
            <form class="form flex-container-column max-width-600 min-width-550 row-gap-20">
                <div class="flex-container-row bank column-gap-20">
                    <select class="width-175" name="Provinsi" id="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                    <input class="width-320" type="text" placeholder="Nomor Rekening" id="bankAccountNumber">
                </div>
                <div class="flex-container-row major column-gap-20">
                    <input class="width-175 country-code" type="text" placeholder="Fakultas" id="tutorFaculty">
                    <input class="width-320" type="text" placeholder="Jurusan" id="tutorMajor">
                </div>
                <div class="flex-container-row gpa column-gap-20">
                    <input class="width-72" type="text" placeholder="GPA">
                    <input class="width-424" type="text" placeholder="Jurusan" id="parentPhoneNumber">
                </div>
                <div class="flex-container-column column-gap-20">
                    <div class="flex-container-row mastered-course">
                        <input class="email width-465" type="email" placeholder="E-mail" id="parentEmail">
                        <div class="height-40 width-20"></div>
                        <object data="../../assets/svg/signup_tutor_icon_plus.svg" type=""></object>
                    </div>
                </div>
                <div class="flex-container-row flex-center column-gap-40">
                    <input class="button continue" type="button" value="Selanjutnya" id="next">
                    <input class="button abort" type="button" value="Batal" id="cancel">
                </div>
            </form>
        </div>
    </div>

    <?php include '../../assets/php/footer.php' ?>

</body>

</html>