<?php
include "../../assets/php/dbcon.php";
// var_dump($_SESSION);
$sql = "SELECT * FROM class_session  WHERE class_session.tutor_id=" . $_POST['tutor-id'];
// echo $sql;
$result = $conn->query($sql);
if ($result !== false && $result->num_rows > 0) {
    echo "<script>
        var data =  [";
    while ($row = $result->fetch_assoc()) {
        echo substr($row["date"], 8, 2) . ",";
    }
    // echo "1, 14, 20";
    echo "]</script>";
}
 else {
    echo "<script>var data=[]; </script>";
}
if (isset($_POST["month"])) {
    echo "<script>
        var month_php = " . $_POST["month"] . ";
        var year_php = " . $_POST["year"] . ";
        </script>";
} else {
    $month=date('m');
    $year=date('Y');
    echo "<script>
        var month_php = " . $month . ";
        var year_php = " . $year . ";
        </script>";
    
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
    <?php include "../../assets/php/header.php"; ?>
    <div class="flex-container-row flex-center">
        <div class="flex-container-column flex-center margin-top-82 margin-bottom-82 row-gap-20">
            <div>
                <div class="flex-container-row flex-center width-1032 ">
                    <span class="calendar__title">
                        <h1>Pilih waktu dan tanggal dari blok hijau di bawah ini. Abu-abu berarti tanggal tidak tersedia</h1>
                    </span>
                </div>
                <div class="width-1032">
                    <hr>
                </div>
            </div>
            <div class="flex-container-row flex-start width-1032 column-gap-20">
                <!-- <div class="flex-container-row flex-center width-175">
                        <p style="line-height: 0px;">
                            <span class="month-year" id="month"></span>
                            <span class="month-year" id="year"></span>
                        </p>
                    </div> -->
                <form action="" method="POST">
                <?php 
                        $month-=1;
                        if($month<1){
                            $month=12;
                            $year-=1;
                        }
                    ?>
                    <input type="text" name="month" value=<?php echo $month?> hidden>
                    <input type="text" name="year" value=<?php echo $year?> hidden>
                    <input class="button-prev" type="button" id="prev-month">
                </form>
                <form class="flex-container-row flex-center" action="" method="get">
                    <input class="remove-input-design" type="sumbit" id="month-year" value="" disabled>
                </form>
                <form action="" method="POST">
                    <?php 
                        $month+=1;
                        if($month>12){
                            $month=1;
                            $year+=1;
                        }
                    ?>
                    <input type="text" name="month" value=<?php echo $month?> hidden>
                    <input type="text" name="year" value=<?php echo $year?> hidden>
                    <input class="button-next" type="button" id="next-month">
                </form>
            </div>
            <div class="calendar-container" id='calendar'>
                <!-- header -->
                <div class="day__text">Senin</div>
                <div class="day__text">Selasa</div>
                <div class="day__text">Rabu</div>
                <div class="day__text">Kamis</div>
                <div class="day__text">Jumat</div>
                <div class="day__text">Sabtu</div>
                <div class="day__text">Minggu</div>

                <!-- date content 1 -->
                <div class="calendar__date date__text" name="" id="row-1-col-1"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-2"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-3"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-4"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-5"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-6"></div>
                <div class="calendar__date date__text" name="" id="row-1-col-7"></div>
                <!-- date content 2 -->
                <div class="calendar__date date__text" name="" id="row-2-col-1"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-2"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-3"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-4"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-5"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-6"></div>
                <div class="calendar__date date__text" name="" id="row-2-col-7"></div>
                <!-- date content 3 -->
                <div class="calendar__date date__text" name="" id="row-3-col-1"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-2"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-3"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-4"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-5"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-6"></div>
                <div class="calendar__date date__text" name="" id="row-3-col-7"></div>
                <!-- date content 4 -->
                <div class="calendar__date date__text" name="" id="row-4-col-1"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-2"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-3"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-4"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-5"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-6"></div>
                <div class="calendar__date date__text" name="" id="row-4-col-7"></div>
                <!-- date content 5 -->
                <div class="calendar__date date__text" name="" id="row-5-col-1"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-2"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-3"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-4"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-5"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-6"></div>
                <div class="calendar__date date__text" name="" id="row-5-col-7"></div>
            </div>
            <div class="flex-container-row flex-end width-1032">
                <a href='../tutee/booking.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
            </div>

            <div class="login-box hide flex-container-column flex-center width-650 login-border row-gap-20" id="set-time">
                <div class="flex-container-row flex-end width-full margin-top-15 margin-right-30">
                    <img class="width-30" src="../../assets/png/icon_x.png" alt="" onclick="hidePopUp()">
                </div>
                <form class="flex-container-column flex-center margin-bottom-82 width-full row-gap-40" method="post" action="./booking.php">
                    <div class="flex-container-column flex-start width-80-percent row-gap-10">
                        <h1>Waktu Sesi Tutor</h1>
                        <div class="font-size-18">
                            <span id="time-info"></span>
                            <input type="text" id="time-info2" name="date"hidden>
                            <input type="text" id="time-info3" name="fulldate"hidden>
                        </div>
                    </div>
                    <div class="flex-container-row flex-center font-size-18 width-55-percent column-gap-20">
                        <div class=" width-20-percent">Dari</div>
                        <select class="width-80-percent add-arrow-down" name="time_start" id="">
                            <option disabled selected value> -- Pilih Waktu Mulai -- </option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                        </select>
                    </div>
                    <div class="flex-container-row flex-center font-size-18 width-55-percent column-gap-20">
                        <div class="font-size-18 width-20-percent">Sampai</div>
                        <select class="width-80-percent add-arrow-down" name="time_end" id="">
                            <option disabled selected value> -- Pilih Waktu Selesai -- </option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                        </select>
                    </div>
                    <input class="button continue" type="submit" value="Ok">
                    <input type="text" name="subject-tutor" value="<?php echo $_POST["subject-tutor"] ?>" hidden>
                    <input type="text" name="tutor-id" value="<?php echo $_POST["tutor-id"] ?>" hidden>
                    <input type="text" name="tutor-name" value="<?php echo $_POST["tutor-name"] ?>" hidden>
                </form>
            </div>
        </div>
    </div>
    <?php include '../../assets/php/footer.php' ?>
    <script src="../../scripts/calendar_booking.js"></script>
</body>

</html>