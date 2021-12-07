<?php
session_start();
include "../../assets/php/dbcon.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit-final"] == "FINAL") {
    $sql = "INSERT INTO `class_session` (`class_subject`, `tutor_id`, `tutee_id`, `date`, `time_start`, `time_end`, `completed`,`type`,`purpose`)VALUES (\"" . $_POST["subject-tutor"] . "\", \"" . $_POST["tutor-id"] . "\", \"" . $_SESSION["id"] . "\", \"" . $_POST["date"] . "\", \"" . $_POST["time_start"] . "\", \"" . $_POST["time_end"] . "\", \"0\" , \"" . $_POST["type"] . "\", \"" . $_POST["purpose"] . "\")";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>location.href = '../../index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
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
    <link rel="stylesheet" href="../../css/calendar_tutee.css">
</head>

<body>
    
        <?php include '../../assets/php/header.php'; ?>
        <div class="flex-container-row flex-center">
            <div class="flex-container-column flex-center width-1280 margin-top-82 margin-bottom-82 row-gap-40">
                Buat Sesi Belajar
                <br>
                <?php
                echo $_POST["subject-tutor"];
                ?>
                <br>
                Dengan Tutor:
                <?php
                echo $_POST["tutor-name"];
                ?>
                <form action="./calendar_booking.php" method="POST">
                    <input class="background-transparent add-arrow-right width-650 text-align-left" type="submit" value="<?php echo (isset($_POST["time_start"])) ?  $_POST["fulldate"] . " " . $_POST["time_start"] . "-" . $_POST["time_end"]   : "Pilih Waktu?" ?>">
                    <input type="text" name="subject-tutor" value="<?php echo $_POST["subject-tutor"] ?>" hidden>
                    <input type="text" name="tutor-id" value="<?php echo $_POST["tutor-id"] ?>" hidden>
                    <input type="text" name="tutor-name" value="<?php echo $_POST["tutor-name"] ?>" hidden>
                </form>
                <!-- <select class="add-arrow-down width-650" name="" id="">
                <option disabled selected value> -- Pilih Mata Kuliah -- </option>
            </select> -->
                <!-- PINDAH FORM KESINI -->
                <form method="post" action="">
                <div class="flex-container-column flex-center margin-bottom-82 width-full row-gap-40">

                    <!-- <input type="text" name="date" value="<?php //echo $_POST["date"] 
                                                                ?>" hidden> -->

                    
                    <select class="add-arrow-down width-650" name="type" id="">
                        <option disabled selected value> -- Select Online/ Offline -- </option>
                        <option value="online"> Online </option>
                        <option value="offline"> Offline </option>
                    </select>
                </div>

                <!-- <a href="../../pages/tutee/calendar_booking.php?tutor-id=<?php //echo $_POST["tutor-id"] 
                                                                                ?>&subject-tutor=<?php //echo $_POST["subject-tutor"] 
                                                                                                    ?>&tutor-name=<?php //echo $_POST["tutor-name"] 
                                                                                                                ?>"> -->

                <!-- </a> -->
                <textarea class="width-650 height-300" name="purpose" id="" placeholder="Ceritakan tujuan Anda di sesi ini"></textarea>
                <div class="flex-container-row flex-end column-gap-20 width-650">
                    <input class='button continue' type='button' name='submit' value='Konfirmasi' id='next' onclick="showPopUp()">
                    <a href="../../assets/php/logout.php"><input class='button abort' type='button' value='Batal' id='cancel'></a>
                </div>
                <div class="login-box flex-container-column hide flex-center width-650 login-border row-gap-20" id="confirmation">
                <div class="flex-container-row flex-end width-full margin-top-15 margin-right-30">
                    <img class="width-30" src="../../assets/png/icon_x.png" alt="" onclick="hidePopUp()">
                </div>
                <div class="flex-container-column text-align-center line-height-30 width-80-percent row-gap-20">
                    <h1>Apakah anda yakin ingin book kelas ini?</h1>
                    <div class="font-size-18">
                        <span id="time-info">Jika anda booking kelas ini, anda tidak bisa booking
                            kelas lain sampai anda menyelesaikan tugas kelas ini.</span>
                    </div>
                </div>
                <!-- FORM YANG DIPINDAH -->
                <!-- <form class="flex-container-column flex-center margin-bottom-82 width-full row-gap-40" method="post" action=""> -->

                <input type="text" name="date" value="<?php echo $_POST["date"]  ?>" hidden>
                <input type="text" name="time_start" value="<?php echo $_POST["time_start"] ?>" hidden>
                <input type="text" name="time_end" value="<?php echo $_POST["time_end"] ?>" hidden>
                <input type="text" name="subject-tutor" value="<?php echo $_POST["subject-tutor"] ?>" hidden>
                <input type="text" name="tutor-id" value="<?php echo $_POST["tutor-id"] ?>" hidden>
                <input type="text" name="submit-final" value="FINAL" hidden>
                <input class="button continue" type="submit" value="FINAL">

            </div>
                </form>
            </div>
            
        </div>
        <?php include '../../assets/php/footer.php' ?>
        <script src="../../scripts/booking.js"></script>
   
</body>

</html>