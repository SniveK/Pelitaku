<?php
if(isset($_SESSION['is_tutor']) && $_SESSION["is_tutor"]==1){
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
        </div>
        <div class="width-1280">
            <hr>
        </div>
    </div>

    <?php
    include "../../assets/php/dbcon.php";
    $sql = "SELECT * FROM users JOIN tutor on users.id=tutor.id WHERE users.id=".$_SESSION["id"];
    $result = $conn->query($sql);
    if ($result !== false && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    echo "<div class='flex-container-column flex-center margin-bottom-82'>
    <div class='profile-image-container'>
        <div class='image-container'>
            <div class='circle width-192 height-192'></div>
        </div>
        <div class='review-container'>
            <object data='../../assets/svg/profile_tutor_starbar.svg' type=''></object>
        </div>
    </div>
    <div class='flex-container-row flex-center width-1280'>
        <div class='flex-container-column flex-start width-30-percent row-gap-20'>
            <div class='flex-container-column width-full'>
                <div class='bold'>Email</div>
                <div class='width-full'>
                    <input class='width-full' type='text' placeholder='Email' id='profileEmail' value='".$row["email"]."'>
                </div>
            </div>
            <div class='flex-container-row column-gap-20'>
                <div class='flex-container-column width-full'>
                    <div class='bold'>Nama Depan</div>
                    <input class='width-full' type='text' placeholder='Nama Depan' id='profileFirstName' value='".$row["first_name"]."'>
                </div>
                <div class='flex-container-column width-full'>
                    <div class='bold'>Nama Belakang</div>
                    <input class='width-full' type='text' placeholder='Nama Belakang' id='profileLastName' value='".$row["last_name"]."'>
                </div>
            </div>

            <div class='flex-container-column'>
                <div class='bold'>Nomor Ponsel</div>
                <div class='flex-container-row column-gap-20 width-full'>
                    <input class='width-15-percent' type='text' value='+62' id='profileCountryCode' disabled>
                    <input class='width-full' type='text' placeholder='Nomor Ponsel' id='profilePhoneNumber' value='".$row["phone_number"]."'>
                </div>
            </div>
            <div class='flex-container-row column-gap-20'>
                <div class='flex-container-column width-175'>
                    <div class='bold'>Bank</div>
                    <select class='width-full' name='Provinsi' id='cars' value='".$row["bank"]."'>
                        <option value='BCA'>BCA</option>
                        <option value='Mandiri'>Mandiri</option>
                        <option value='BNI'>BNI</option>
                        <option value='Permata'>Permata</option>
                    </select>
                </div>
                <div class='flex-container-column'>
                    <div class='bold'>Nomor Rekening</div>
                    <input class='width-full' type='text' placeholder='Nomor Rekening' id='profilePhoneNumber' value='".$row["bank_number"]."'>
                </div>
            </div>
            <div class='flex-container-column'>
                <div class='bold'>Alamat</div>
                <input class='width-full' type='text' placeholder='Alamat' id='profilePhoneNumber' value='".$row["address"]."'>
            </div>
            <div class='flex-container-column'>
                <div class='bold'>Password</div>
                <input class='width-full' type='password' placeholder='**********' id='profilePassword' value='".$row["password"]."'>
            </div>
        </div>
    </div>
    <div class='flex-container-row flex-center row-gap-20 width-1280 margin-top-30'>
        <div class='flex-container-column flex-start width-50-percent row-gap-20'>
            <div class='flex-container-column'>
                <div class='bold'>Tentang ".$row["first_name"]."</div>
                <textarea class= 'width-full address-text-area'Tentang saya' id='address'>".$row["about"]."</textarea>
            </div>
            <div class='flex-container-row flex-start column-gap-20'>
                <div class='bold '>IPK</div>
                <input class='width-15-percent' type='text' placeholder='IPK' id='profileIPK' value='".$row["ipk"]."'>   
            </div>
            <div class='flex-container-row column-gap-20'>
                <div class='bold'>CV: </div>
                <input class='width-248' type='text' placeholder='link CV' id='profileIPK' value='".$row["cv"]."'>   
            </div>
            <div class='flex-container-row column-gap-20'>
                <div class='bold'>
                    Waktu respon:
                </div> 
                <div>2 jam</div>
            </div>
        </div>
    </div>
    <div class='flex-container-row flex-end width-1280 margin-top-30'>
        <div class='flex-container-row buttons'>
            <input class='button continue' type='button' value='Simpan'>
            <input class='button abort' type='button' value='Batal'>
        </div>
    </div>
</div>";
    } else{
        echo "DB ERROR";
    }
    ?>
    <?php include "../../assets/php/footer.php"?>
</body>

</html>