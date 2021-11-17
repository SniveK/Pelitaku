<?php
if (isset($_SESSION['is_tutor']) && $_SESSION["is_tutor"] == 1) {
    echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/profile.css">
    <link rel="stylesheet" href="../../style.css">
</head>

<body class="flex-container-columns">
    <?php include "../../assets/php/header.php"?>

    <div class="flex-container-column flex-center margin-top-82">
        <div class="flex-container-row flex-center width-1280">
            <span class="title">
                <h1>Profil</h1>
            </span>
            <input class="button abort" type="button" value="sunting profil">
        </div>
        <div class="width-1280">
            <hr>
        </div>
    </div>

    <?php
    include "../../assets/php/dbcon.php";
    $sql = "SELECT * FROM users JOIN tutor on users.id=tutor.id WHERE users.id=" . $_SESSION["id"];
    $result = $conn->query($sql);
    if ($result !== false && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='flex-container-column flex-center margin-bottom-82'>
        <div class='profile-image-container'>
            <div class='image-container'>
                <div class='circle width-192 height-192'></div>
            </div>
            <div class='review-container' style='position:relative'>
                <div style='position: absolute;bottom: 35px; '><img src='../../assets/png/starbar_big_grey.png' alt='grey stars'></div>
                <div style='position: absolute;bottom: 35px;  width:".($row["rating"]*36)."px; overflow: hidden;'>
                    <img src='../../assets/png/starbar_big_yellow.png' alt='yellow stars'>
                </div>
                <input class='button abort right' type='button' value='lihat review'>
            </div>
        </div>
        <div class='flex-container-row flex-center width-1280'>
            <div class='flex-container-column flex-start width-30-percent row-gap-20'>
                <div class='flex-container-column width-175'>
                    <div class='bold'>Email</div>
                    <div>" . $row["email"] . "</div>
                </div>
                <div class='flex-container-row column-gap-40'>
                    <div class='flex-container-column width-175'>
                        <div class='bold'>Nama Depan</div>
                        <div>" . $row["first_name"] . "</div>
                    </div>
                    <div class='flex-container-column'>
                        <div class='bold'>Nama Belakang</div>
                        <div>" . $row["last_name"] . "</div>
                    </div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Nomor Ponsel</div>
                    <div class='flex-container-row column-gap-20'>
                        <div>+62</div>
                        <div>" . $row["phone_number"] . "</div>
                    </div>
                </div>
                <div class='flex-container-row column-gap-40'>
                    <div class='flex-container-column width-175'>
                        <div class='bold'>Bank</div>
                        <div>" . $row["bank"] . "</div>
                    </div>
                    <div class='flex-container-column width-175'>
                        <div class='bold'>Nomor Rekening</div>
                        <div>" . $row["bank_number"] . "</div>
                    </div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Alamat</div>
                    <div>" . $row["address"] . "</div>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Password</div>
                    <div>" . $row["password"] . "</div>
                </div>
            </div>
        </div>
        <div class='flex-container-row flex-center row-gap-20 width-1280 margin-top-30'>
            <div class='flex-container-column flex-start width-50-percent row-gap-20'>
                <div class='flex-container-column'>
                    <div class='bold'>Tentang Claresta</div>
                    <div>" . $row["about"] . "</div>
                </div>
                <div class='flex-container-row column-gap-20'>
                    <div class='bold'>IPK</div>
                    <div>" . $row["ipk"] . "</div>
                    <div><a href=''>transcript-saya-yang-baru.com</a></div>
                </div>
                <div class='flex-container-row column-gap-20'>
                    <div class='bold'>CV: </div>
                    <div><a href=''>" . $row["cv"] . "</a></div>
                </div>
                <div class='flex-container-row column-gap-20'>
                    <div class='bold'>
                        Waktu respon:
                    </div>
                    <div>2 jam</div>
                </div>
            </div>
        </div>
        <div class='flex-container-row flex-end width-1280'>
            <input class='button abort' type='button' value='logout'>
        </div>
    </div>";
    } else {
        echo "DB ERROR";
    }
    ?>
   <?php include "../../assets/php/footer.php"?>
</body>

</html>