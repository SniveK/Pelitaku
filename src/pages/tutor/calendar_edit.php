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
                        <h1>Sunting Jadwal</h1>
                    </div>
                </div>
                <div class=" width-1032">
                    <hr>
                </div>
            </div>
            <div class="flex-container-row flex-start width-1032 column-gap-20">
                <button class="button-prev" id="prev-month"> </button>
                <div class="flex-container-row flex-center width-175">
                    <p style="line-height: 0px;">
                        <span class="month-year" id="month"></span>
                        <span class="month-year" id="year"></span>
                    </p>
                </div>
                <button class="button-next" id="next-month"> </button>
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
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-1-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <!-- date content 2 -->
                <div class="calendar__date" name="" id="row-2-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-2-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <!-- date content 3 -->
                <div class="calendar__date" name="" id="row-3-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-3-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <!-- date content 4 -->
                <div class="calendar__date" name="" id="row-4-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-4-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <!-- date content 5 -->
                <div class="calendar__date" name="" id="row-5-col-1">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-2">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-3">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-4">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-5">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-6">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
                <div class="calendar__date" name="" id="row-5-col-7">
                    <div class="date__text"></div>
                    <div class="width-full flex-container-column flex-center font-size-18"></div>
                </div>
            </div>
            <div class="flex-container-row flex-end width-1032">
                <a href='../tutee/booking.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
            </div>

            <div class="login-box hide flex-container-column flex-center width-650 login-border row-gap-20" id="available-time">
                <div class="flex-container-row flex-end width-full margin-top-15 margin-right-30">
                    <img class="width-30" src="../../assets/png/icon_x.png" alt="" onclick="hidePopUp()">
                </div>
                <div class="flex-container-column flex-start width-80-percent row-gap-10">
                    <h1>Saya tersedia di tanggal</h1>
                    <div class="font-size-18">
                        <span id="time-info"></span>
                    </div>
                </div>
                <form class="flex-container-column flex-center margin-bottom-82 width-full row-gap-40" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="flex-container-row flex-center font-size-18 width-55-percent column-gap-20">
                        <div class=" width-20-percent">Dari</div>
                        <select class="width-80-percent add-arrow-down" name="" id="start">
                            <option value="default" disabled selected value> -- Pilih Waktu Mulai -- </option>
                            <option value="09">09.00</option>
                            <option value="10">10.00</option>
                            <option value="11">11.00</option>
                            <option value="12">12.00</option>
                            <option value="13">13.00</option>
                            <option value="14">14.00</option>
                            <option value="15">15.00</option>
                            <option value="16">16.00</option>
                            <option value="17">17.00</option>
                            <option value="18">18.00</option>
                            <option value="19">19.00</option>
                            <option value="20">20.00</option>
                        </select>
                    </div>
                    <div class="flex-container-row flex-center font-size-18 width-55-percent column-gap-20">
                        <div class="font-size-18 width-20-percent">Sampai</div>
                        <select class="width-80-percent add-arrow-down" name="" id="finish">
                            <option value="default" disabled selected value> -- Pilih Waktu Selesai -- </option>
                            <option value="11">11.00</option>
                            <option value="12">12.00</option>
                            <option value="13">13.00</option>
                            <option value="14">14.00</option>
                            <option value="15">15.00</option>
                            <option value="16">16.00</option>
                            <option value="17">17.00</option>
                            <option value="18">18.00</option>
                            <option value="19">19.00</option>
                            <option value="20">20.00</option>
                            <option value="21">21.00</option>
                            <option value="22">22.00</option>
                        </select>
                    </div>
                    <div class="font-size-18" id="warning-message">

                    </div>
                    <input class="button continue" id="submit-available-time" type="submit" value="Ok">
                </form>
            </div>
        </div>
    </div>
    <?php include '../../assets/php/footer.php' ?>
    <script src="../../scripts/calendar.js"></script>
</body>

</html>