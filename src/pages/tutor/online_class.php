<?php 
session_start();
?>
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
<?php
include '../../assets/php/dbcon.php';
$sql = "SELECT * FROM class_session JOIN users ON class_session.tutee_id=users.id JOIN tutee ON class_session.tutee_id=tutee.id WHERE class_session_id=" . $_GET["class_session_id"];
$result = $conn->query($sql);
if ($result !== false && $result->num_rows > 0) {
    // echo $sql;
    $row = $result->fetch_assoc();
} else {
    // echo $sql;
}
?>

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
                            <?php echo $row["class_subject"] ?>
                        </b>
                    </div>
                    <div class="font-size-18">
                        <?php echo date_format(date_create($row["date"]), "j F Y") . "/" . $row["time_start"] . "-" . $row["time_end"] ?>
                    </div>
                    <div class="flex-container-row flex-between">
                        <!-- Student Name -->
                        <div class="secondary text-align-center">
                            <?php echo $row["first_name"] . " " . $row["last_name"] ?>
                        </div>
                        <!-- <input class='button abort' type='button' value='Kirim Pesan'> -->
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
                        <?php echo $row["purpose"] ?>
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