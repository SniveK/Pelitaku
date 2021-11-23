<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_tutor']) && $_SESSION["is_tutor"] == 1) {
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
        </div>
        <div class="width-1032">
            <hr>
        </div>
    </div>

    <?php
    include "../../assets/php/dbcon.php";
    // var_dump($_SESSION);
    $sql = "SELECT * FROM users JOIN tutee on users.id=tutee.id WHERE users.id=" . $_SESSION["id"];
    $result = $conn->query($sql);
    if ($result !== false && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "DB ERROR";
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
                                <input class="width-full" type="text" name="first_name" id="profileFirstName" value="<?php echo $row["first_name"] ?>">
                            </div>
                        </div>
                        <div class='flex-container-column'>
                            <div class='bold'>Nama Belakang</div>
                            <div class="width-full">
                                <input class="width-full" type="text" name="last_name" id="profileLastName" value="<?php echo $row["last_name"] ?>">
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
                        <input class="width-full" type="text" placeholder="Alamat" name="address" id="profileAddress" value="<?php echo $row["province"].', '.$row["city"].', '.$row["district"].', '.$row["sub_district"].', '.$row["address"] ?>">
                    </div>
                    <div class='flex-container-column'>
                        <div class='bold'>Password</div>
                        <input class="width-full" type="text" placeholder="Password" name="password" id="password" value="<?php echo (str_repeat('*', strlen($row["password"]))) ?>" disabled>
                    </div>
                </div>
                <div class='flex-container-column flex-start row-gap-20 tutee-desc-col-2'>
                    <div class='flex-container-column'>
                        <div class='flex-container-column'>
                            <div class='bold'>Email Orang Tua/Wali</div>
                            <div class="width-full">
                                <input class="width-full" type="text" name="email" id="profileEmail" value="<?php echo $row["parent_email"] ?>">
                            </div>
                        </div>
                        <div class='flex-container-row column-gap-40'>
                            <!-- <div class='bold'>Nama Orang Tua/Wali</div>
                         php yang ini nanti diubah buat nama orang tua
                        <div></div>
                        <div class="width-full">
                            <input class="width-full" type="text" name="parent_name" id="profileParentName" value="<?php echo $row["parent_first_name"] ?>">
                        </div> -->
                            <div class='flex-container-column'>
                                <div class='bold'>Nama Depan Orang Tua/Wali</div>
                                <div class="width-full">
                                    <input class="width-full" type="text" name="first_name" id="profileFirstName" value="<?php echo $row["parent_first_name"] ?>">
                                </div>
                            </div>
                            <div class='flex-container-column'>
                                <div class='bold'>Nama Belakang Orang Tua/Wali</div>
                                <div class="width-full">
                                    <input class="width-full" type="text" name="last_name" id="profileLastName" value="<?php echo $row["parent_last_name"] ?>">
                                </div>
                            </div>
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
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_1"]; ?>" id="i-will-1" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_2"]; ?>" id="i-will-2" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_3"]; ?>" id="i-will-3" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_4"]; ?>" id="i-will-4" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_5"]; ?>" id="i-will-5" disabled></li>
                        </ul>
                    </div>
                </div>
                <div class="commitment width-496">
                    <div class="font-size-20">
                        <p>Saya tidak akan</p>
                        <ul>
                            <li><input class="font-size-20 width-95-percent" type="text" id="i-wont-1" value="Menggunakan Ponsel Selama Belajar" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_not_2"]; ?>" id="i-wont-2" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_not_3"]; ?>" id="i-wont-3" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_not_4"]; ?>" id="i-wont-4" disabled></li>
                            <li><input class="font-size-20 width-95-percent" type="text" value="<?php echo $row["will_not_5"]; ?>" id="i-wont-5" disabled></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='flex-container-row flex-end width-1032'>
                <div class="flex-container-row buttons">
                    <input class="button continue" type="submit" value="Simpan" id="save">
                    <a href="./profile.php"><input class="button abort" type="button" value="Batal"></a>
                </div>
            </div>
        </div>
    </form>
    <?php include "../../assets/php/footer.php" ?>
</body>

</html>