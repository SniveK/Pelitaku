<?php
if (!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['is_tutor']) || $_SESSION["is_tutor"] == 0) {
    // echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
include "../../assets/php/dbcon.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE users JOIN tutor ON users.id = tutor.id SET email=\"" . $_POST["email"] . "\", first_name=\"" . $_POST["first_name"] . "\", last_name=\"" . $_POST["last_name"] . "\", 
        phone_number=\"" . $_POST["phone_number"] . "\", address=\"" . $_POST["address"] . "\", bank=\"" . $_POST["bank"] . "\", bank_number=\"" . $_POST["bank_number"] . "\", 
        about=\"" . $_POST["about"] . "\", ipk=\"" . $_POST["ipk"] . "\", cv=\"" . $_POST["cv"] . "\" 
        WHERE users.id=" . $_SESSION["id"];
    if ($conn->query($sql) === TRUE) {
        header("Location: ./profile.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$sql = "SELECT * FROM users JOIN tutor on users.id=tutor.id WHERE users.id=" . $_SESSION["id"];
$result = $conn->query($sql);
if ($result !== false && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "DB ERROR";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/profile_tutor.css">
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
    <div class="flex-container-column flex-center margin-bottom-82">
        <div class="profile-image-container">
            <div class="image-container">
            <div class='circle width-192 height-192' style='background-image: url("../../assets/uploads/profile_pictures/<?php echo $_SESSION["id"]?>.jpg"),url("../../assets/uploads/profile_pictures/<?php echo $_SESSION["id"]?>.png"),url("../../assets/uploads/profile_pictures/<?php echo $_SESSION["id"]?>.jpeg");' id="profile_picture"></div>
            </div>
            <div class='review-container' style='position:relative'>
                <div style='position: absolute;bottom: 35px; '><img src='../../assets/png/starbar_big_grey.png' alt='grey stars'></div>
                <div style='position: absolute;bottom: 35px;  width:<?php echo (round($row["rating"])*36) ?>px; overflow: hidden;'>
                    <img src='../../assets/png/starbar_big_yellow.png' alt='yellow stars'>
                </div>
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="flex-container-row flex-center width-1280">
                <div class="flex-container-column flex-start width-30-percent row-gap-20">
                    <div class="flex-container-column width-full">
                        <div class="bold">Email</div>
                        <div class="width-full">
                            <input class="width-full" type="text" name="email" placeholder="Email" id="profileEmail" value="<?php echo $row["email"] ?>">
                        </div>
                    </div>
                    <div class="flex-container-row column-gap-20">
                        <div class="flex-container-column width-full">
                            <div class="bold">Nama Depan</div>
                            <input class="width-full" type="text" name="first_name" placeholder="Nama Depan" id="profileFirstName" value="<?php echo $row["first_name"] ?>">
                        </div>
                        <div class="flex-container-column width-full">
                            <div class="bold">Nama Belakang</div>
                            <input class="width-full" type="text" name="last_name" placeholder="Nama Belakang" id="profileLastName" value="<?php echo $row["last_name"] ?>">
                        </div>
                    </div>
                    <div class="flex-container-column">
                        <div class="bold">Nomor Ponsel</div>
                        <div class="flex-container-row column-gap-20 width-full">
                            <input class="width-15-percent" type="text" value="+62" id="profileCountryCode" disabled>
                            <input class="width-full" type="text" name="phone_number" placeholder="Nomor Ponsel" id="profilePhoneNumber" value="<?php echo $row["phone_number"] ?>">
                        </div>
                    </div>
                    <div class="flex-container-row column-gap-20">
                        <div class="flex-container-column width-175">
                            <div class="bold">Bank</div>
                            <select class="width-full" name="bank" id="bank" value="<?php echo $row["bank"] ?>">
                                <option value="BCA">BCA</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="BNI">BNI</option>
                                <option value="Permata">Permata</option>
                            </select>
                        </div>
                        <div class="flex-container-column">
                            <div class="bold">Nomor Rekening</div>
                            <input class="width-full" type="text" placeholder="Nomor Rekening" name="bank_number" id="profilePhoneNumber" value="<?php echo $row["bank_number"] ?>">
                        </div>
                    </div>
                    <div class="flex-container-column">
                        <div class="bold">Alamat</div>
                        <input class="width-full" type="text" placeholder="Alamat" name="address" id="profilePhoneNumber" value="<?php echo $row["address"] ?>">
                        <!-- $row["province"].', '.$row["city"].', '.$row["district"].', '.$row["sub_district"].', '. -->
                    </div>
                    <div class="flex-container-column">
                        <div class="bold">Password</div>
                        <input class="width-full" type="password" placeholder="**********" name="password" id="profilePassword" value="<?php echo (str_repeat("*", strlen($row["password"]))) ?>">
                    </div>
                </div>
            </div>
            <div class="flex-container-row flex-center row-gap-20 width-1280 margin-top-30">
                <div class="flex-container-column flex-start width-50-percent row-gap-20">
                    <div class="flex-container-column">
                        <div class="bold">Tentang <?php echo $row["first_name"] ?></div>
                        <textarea class="width-full address-text-area" name="about" id="address"><?php echo $row["about"] ?></textarea>
                    </div>
                    <div class="flex-container-row flex-start column-gap-20">
                        <div class="bold ">IPK</div>
                        <input class="width-15-percent" type="text" placeholder="IPK" name="ipk" id="profileIPK" value="<?php echo $row["ipk"] ?>">
                    </div>
                    <div class="flex-container-row column-gap-20">
                        <div class="bold">CV: </div>
                        <input class="width-248" type="text" placeholder="link CV" id="profileIPK" name="cv" value="<?php echo $row["cv"] ?>">
                    </div>
                    <div class="flex-container-row column-gap-20">
                        <div class="bold">
                            Waktu respon:
                        </div>
                        <div>2 jam</div>
                    </div>
                </div>
            </div>
            <div class="flex-container-row flex-center margin-top-30 width-1280">
                <div class="flex-container-row flex-end margin-top-30 width-1032">
                    <div class="flex-container-row buttons">
                        <input class="button continue" type="submit" value="Simpan" id="save">
                        <a href="./profile.php"><input class="button abort" type="button" value="Batal"></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php include "../../assets/php/footer.php" ?>
</body>

</html>