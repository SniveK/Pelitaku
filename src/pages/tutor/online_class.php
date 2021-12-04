<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../css/online_class_tutor.css">


    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>

<body class="background-white">

    <?php include '../../assets/php/header.php'; ?>
    <div class="flex-container-row flex-center margin-top-82 margin-bottom-82 background-white">
        <div class="width-1280 padding-left-right-120">
            <!-- row 1 -->
            <div class="flex-container-row flex-start width-full">
                <h2>
                    Jadwal
                </h2>
            </div>
            <!-- row 2 -->
            <div class="flex-container-row flex-start width-full">
                <!-- photo -->
                <div class="flex-container-column width-30-percent ">
                    <img class="width-200 height-264" src="../../assets/png/profil_kosong.png" alt="tutee_image">
                </div>
                <!-- description -->
                <div class="flex-container-column flex-start width-70-percent row-gap-10">
                    <div class="font-size-20">
                        <b>
                            Studio Design Pasar
                        </b>
                    </div>
                    <div class="font-size-18">
                        15 Oktober 2021/13.00-14.00
                    </div>
                    <div class="flex-container-row flex-between">
                        <!-- Student Name -->
                        <div class="secondary text-align-center">
                            Angela Narissa
                        </div>
                        <input class='button abort' type='button' value='Kirim Pesan'>
                    </div>
                    <div>
                        <hr class="line-separate">
                    </div>
                    <div class="font-size-18">
                        <b>
                            Detail Kelas
                        </b>
                    </div>
                    <div class="font-size-18">
                        Tujuan sesi ini
                    </div>
                    <div class="font-size-18">
                        Tujuan saya di sesi ini adalah untuk belajar membuat garis, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </div>
                </div>
            </div>
            <!-- row 3 -->
            <div>
                <h2>Komitmen</h2>
            </div>
            <div class='flex-container-row flex-center row-gap-20 width-full column-gap-40 margin-top-30 margin-bottom-82'>
                <div class="commitment width-496">
                    <div class="font-size-20">
                        <h4>Saya akan</h4>
                        <ul class="font-size-18">
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_1"]; ?>" id="i-will-1" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_2"]; ?>" id="i-will-2" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_3"]; ?>" id="i-will-3" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_4"]; ?>" id="i-will-4" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_5"]; ?>" id="i-will-5" disabled></li>
                        </ul>
                    </div>
                </div>
                <div class="commitment width-496">
                    <div class="font-size-20">
                        <h4>Saya tidak akan</h4>
                        <ul class="font-size-18">
                            <li><input class=" width-95-percent" type="text" id="i-wont-1" value="Menggunakan Ponsel Selama Belajar" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_not_2"]; ?>" id="i-wont-2" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_not_3"]; ?>" id="i-wont-3" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_not_4"]; ?>" id="i-wont-4" disabled></li>
                            <li><input class=" width-95-percent" type="text" value="<?php echo $row["will_not_5"]; ?>" id="i-wont-5" disabled></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex-container-row flex-end">
                <input class="button continue" type="submit" value="Mulai Kelas" id="save">
            </div>
        </div>
    </div>

    <?php include '../../assets/php/footer.php'; ?>

</body>

</html>