<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../css/calendar_tutor.css">
</head>

<body>
    <?php include "../../assets/php/header.php"; ?>
    <div class="flex-container-row flex-center">
        <div class="flex-container-column flex-center margin-top-82 margin-bottom-82 row-gap-20">
            <div>
                <div class="flex-container-row flex-between width-1032 ">
                    <div class="calendar__title">
                        <h1>Atur Jadwal</h1>
                    </div>
                    <div class="flex-container-row flex-center">
                        <a href='../tutor/calendar_edit.php'><input class='button abort' type='button' value='sunting jadwal' id='cancel'></a>
                    </div>
                </div>
                <div class=" width-1032">
                    <hr>
                </div>
            </div>
            <div class="flex-container-row flex-start width-1032 column-gap-20">
                <form action="">
                    <input class="button-prev" type="button" id="prev-month">
                </form>
                <form class="flex-container-row flex-center" action="" method="get">
                    <input class="remove-input-design" type="sumbit" id="month-year" value="" disabled>
                </form>
                <form action="">
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
                <div class="calendar__date" name="" id="row-1-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <!-- date content 2 -->
                <div class="calendar__date" name="" id="row-2-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <!-- date content 3 -->
                <div class="calendar__date" name="" id="row-3-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <!-- date content 4 -->
                <div class="calendar__date" name="" id="row-4-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <!-- date content 5 -->
                <div class="calendar__date" name="" id="row-5-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center"></div>
                </div>
            </div>
            <div class="flex-container-row flex-end width-1032">
                <!-- <a href='../tutee/booking.php'> -->
                <input class='button abort' type='button' value='Batal' id='cancel'>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php include '../../assets/php/footer.php' ?>
    <script src="../../scripts/calendar.js"></script>
</body>

</html>