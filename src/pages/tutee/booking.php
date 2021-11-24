<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../css/booking.css">
</head>

<body>
    <?php include '../../assets/php/header.php'; ?>
    <div class="flex-container-row flex-center">
        <div class="flex-container-column flex-center width-1280 margin-top-82 margin-bottom-82 row-gap-40">
            <select class="add-arrow-down width-650" name="" id="">
                <option disabled selected value> -- Pilih Mata Kuliah -- </option>
            </select>
            <select class="add-arrow-down width-650" name="" id="">
                <option disabled selected value> -- Select Online/ Offline -- </option>
                <option value="online"> Online </option>
                <option value="offline"> Offline </option>
            </select>
            <a href="../../pages/tutee/calendar_booking.php">
                <input class="background-transparent add-arrow-right width-650 text-align-left" type="button" value="Pilih Waktu">
            </a>
            <textarea class="width-650 height-300" name="" id="" placeholder="Ceritakan tujuan Anda di sesi ini"></textarea>
            <div class="flex-container-row flex-end column-gap-20 width-650">
                <input class='button continue' type='submit' name='submit' value='Konfirmasi' id='next' onclick="showPopUp()">
                <a href="../../assets/php/logout.php"><a href="../../assets/php/logout.php"><input class='button abort' type='button' value='Batal' id='cancel'></a></a>
            </div>
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
            <form class="flex-container-column flex-center margin-bottom-82 width-full row-gap-40" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input class="button continue" type="submit" value="Ok">
            </form>
        </div>
    </div>
    <?php include '../../assets/php/footer.php' ?>
    <script src="../../scripts/booking.js"></script>
</body>

</html>