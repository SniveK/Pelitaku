<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_tutor']) && $_SESSION["is_tutor"] == 0) {
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
    <link rel="stylesheet" href="../../css/profile_tutee.css">
    <link rel="stylesheet" href="../../style.css">
</head>

<body class="flex-container-columns">
    <?php include "../../assets/php/header.php" ?>

    <div class="flex-container-column flex-center margin-top-82">
        <div class="flex-container-row flex-center width-1032">
            <span class="title">
                <h1>Profil</h1>
            </span>
            <a href="./profile_edit.php"><input class="button abort" type="button" value="sunting profil"></a>
        </div>
        <div class="width-1032">
            <hr>
        </div>
    </div>

    <?php
    include "../../assets/php/dbcon.php";
    // var_dump($_SESSION);
    $sql = "SELECT * FROM users JOIN tutor on users.id=tutor.id WHERE users.id=" . $_SESSION["id"];
    $result = $conn->query($sql);
    if ($result !== false && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "DB ERROR";
    }
    ?>
    <div class='flex-container-column flex-center margin-bottom-82'>
        <!-- photo -->
        <div class='profile-image-container'>
            <div class='image-container'>
                <div class='circle width-192 height-192'></div>
            </div>
        </div>
        <!-- description -->

        <div class="tutee-desc-container font-size-18 line-height-30">
            <div class='flex-container-column flex-start row-gap-20 tutee-desc-col-1'>
                <div class='flex-container-column'>
                    <div class='bold'>Email</div>
                    <div class="width-full">
                        <input class="width-full" type="text" name="email" id="profileEmail" value="<?php echo $row["email"] ?>">
                    </div>
                </div>
                <div class='flex-container-row column-gap-40'>
                    <div class='flex-container-column'>
                        <div class='bold'>Nama Depan</div>
                        <div class="width-full">
                            <input class="width-full" type="text" name="first_name" id="profileFirstName" value="<?php echo $row["email"] ?>">
                        </div>
                    </div>
                    <div class='flex-container-column'>
                        <div class='bold'>Nama Belakang</div>
                        <div class="width-full">
                            <input class="width-full" type="text" name="last_name" id="profileLastName" value="<?php echo $row["email"] ?>">
                        </div>
                    </div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Nomor Ponsel</div>
                    <div class="flex-container-row column-gap-20 width-full">
                        <input class="width-15-percent" type="text" value="+62" id="profileCountryCode" disabled>
                        <input class="width-full" type="text" name="phone_number" placeholder="Nomor Ponsel" id="profilePhoneNumber" value="<?php echo $row["phone_number"] ?>">
                    </div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Alamat</div>
                    <input class="width-full" type="text" placeholder="Alamat" name="address" id="profileAddress" value="<?php echo $row["address"] ?>">
                </div>
            </div>

            <div class='flex-container-column flex-start row-gap-20 tutee-desc-col-2'>
                <div class='flex-container-column'>
                    <div class='bold'>Nama Orang Tua/Wali</div>
                    <!-- php yang ini nanti diubah buat nama orang tua -->
                    <!-- <div><?php echo $row["address"] ?></div> -->
                    <div class="width-full">
                        <input class="width-full" type="text" name="parent_name" id="profileParentName" value="<?php echo $row["email"] ?>">
                    </div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Nomor Ponsel Orang Tua</div>
                    <div class="flex-container-row column-gap-20 width-full">
                        <input class="width-15-percent" type="text" value="+62" id="profileCountryCode" disabled>
                        <input class="width-full" type="text" name="phone_number" placeholder="Nomor Ponsel" id="profilePhoneNumber" value="<?php echo $row["phone_number"] ?>">
                    </div>
                </div>
            </div>
        </div>

        <!-- commitment -->
        <div class='flex-container-row flex-center row-gap-20 width-1280 column-gap-40 margin-top-30 margin-top-30 margin-bottom-82'>
            <div class="commitment width-496">
                <div class="font-size-20">
                    <p>Saya akan</p>
                    <ul>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-will-1" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-will-2" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-will-3" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-will-4" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-will-5" disabled></li>
                    </ul>
                </div>
            </div>
            <div class="commitment width-496">
                <div class="font-size-20">
                    <p>Saya tidak akan</p>
                    <ul>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-1" value="Menggunakan Ponsel Selama Belajar" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-2" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-3" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-4" disabled></li>
                        <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-5" disabled></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='flex-container-row flex-end width-1032'>
            <form action="../../assets/php/logout.php" method="post">
                <input class='button abort' type='submit' value='logout'>
            </form>
        </div>
    </div>
    <?php include "../../assets/php/footer.php" ?>
</body>

</html>