<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION["login"] = '1';
}
if (isset($_SESSION['id'])) {
    echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
$emailError = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body class="flex-container-columns">

    <?php include '../../assets/php/header.php' ?>

    <div class="flex-container-row flex-center margin-top-82">
        <div class="title">
            <h1>Buat Akun Pelitaku</h1>
        </div>
    </div>
    <?php
    if (!empty($_POST['submit'])) {
        if ($_POST['page'] == 2) {
            include "../../assets/php/dbcon.php";
            $sql = "SELECT email FROM users WHERE users.email=\"" . $_POST["email"] . "\"";
            $result = $conn->query($sql);
            // 
            if ($result !== false && $result->num_rows > 0) {
                $emailError = "Email is already used";
            } else {
                $_SESSION['login'] = $_POST['page'];
            }
        } else {
            $_SESSION['login'] = $_POST['page'];
        }
        foreach ($_POST as $foo => $bar) {
            $_SESSION[$foo] = $bar;
        }
    } else {
        $_POST["first_name"] = '';
        $_POST["last_name"] = '';
        $_POST["email"] = '';
        $_POST["password"] = '';
        $_POST["phone_number"] = '';
    }
    switch ($_SESSION['login']) {
        case '1':
            echo "
                    <div class='flex-container-row flex-center margin-bottom-82'>
                        <div class='flex-container-row'>
                            <div class='roadmap'>
                                <object data='../../assets/svg/signup_tutee_roadmap_1.svg' type=''></object>
                            </div>
                            <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                                <div class='flex-container-row name column-gap-20'>
                                    <input required class='width-248' type='text' placeholder='Nama Depan' id='tuteeFirstName' value='" . $_POST["first_name"] . "' name='first_name'>
                                    <input required class='width-248' type='text' placeholder='Nama Belakang' id='tuteeLastName' value='" . $_POST["last_name"] . "' name='last_name'>
                                </div>
                                <div class='flex-container-row phone-number column-gap-20'>
                                    <input required class='width-50 country-code' type='text' value='+62' disabled>
                                    <input required class='width-440' type='text' placeholder='Nomor Ponsel' id='tuteePhoneNumber' value='" . $_POST["phone_number"] . "' name='phone_number' oninput=\"this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');\">
                                </div>
                                <input required class='email width-504' type='email' placeholder='E-mail' id='tuteeEmail' value='" . $_POST["email"] . "' name='email' >
                                $emailError
                                <input required class='password width-504' type='password' placeholder='Kata Sandi' id='password' name='password'>
                                <div id='passwordErrorLabel'></div>
                                <input required class='password width-504' type='password' placeholder='Ulangi Kata Sandi' id='confirm'>
                                <div id='confirmErrorLabel'></div>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <input class='button continue' type='submit' name='submit' value='Selanjutnya' id='next' disabled>
                                    <a href='../../assets/php/logout.php'><a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a></a>
                                    <input type='hidden' name='page' value=2>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script src='../../scripts/signup_1.js'></script>
                    ";
            break;

        case '2':
            echo "
                        <div class='flex-container-row flex-center margin-bottom-82'>
                            <div class='flex-container-row'>
                                <div class='roadmap'>
                                    <object data='../../assets/svg/signup_tutee_roadmap_2.svg' type=''></object>
                                </div>
                                <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                                    <select required class='width-504' name='provinsi' id='province'>
                                    <option disabled selected value> -- select an option -- </option>

                                    </select>
                                    <select required class='width-504' name='kota/kabupaten' id='city'>

                                    </select>
                                    <select required class='width-504' name='kecamatan' id='district'>

                                    </select>
                                    <select required class='width-504' name='kelurahan' id='sub-district'>

                                    </select>
                                    <textarea required class='width-504 address-text-area' placeholder='Alamat' name='address' name='address'></textarea>
                                    <div class='flex-container-row flex-center column-gap-40'>
                                        <input class='button continue' type='submit' name='submit' value='Selanjutnya' id='next'>
                                        <a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
                                        <input type='hidden' name='page' value=3>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <script src='../../scripts/signup_2.js'></script>
                    ";
            break;
        case '3':
            echo "
                    <div class='flex-container-row flex-center margin-bottom-82'>
                        <div class='flex-container-row'>
                            <div class='roadmap'>
                                <object data='../../assets/svg/signup_tutee_roadmap_3.svg' type=''></object>
                            </div>
                            <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                                <div class='flex-container-row name column-gap-20'>
                                    <input required class='width-248' type='text' placeholder='Nama Depan Orang Tua' name='parent_first_name'>
                                    <input required class='width-248' type='text' placeholder='Nama Belakang Orang Tua' name='parent_last_name'>
                                </div>
                                <div class='flex-container-row phone-number column-gap-20'>
                                    <input required class='width-50 country-code' type='text' value='+62' disabled>
                                    <input required class='width-440' type='text' placeholder='Nomor Ponsel Orang Tua' name='parent_phone_number' oninput=\"this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');\">
                                </div>
                                <input required class='email width-504' type='email' placeholder='E-mail Orang Tua' name='parent_email'>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <input class='button continue' type='submit' value='Selanjutnya' name='submit' id='next'>
                                    <a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
                                    <input type='hidden' name='page' value=4>
                                </div>
                            </form>
                        </div>
                    </div>
                    ";
            break;
        case '4':
            echo "
                    <div class='flex-container-column flex-center margin-bottom-82 margin-top-82'>
                        <div class='width-1280'>
                            <div class='flex-container-column margin-left-150'>
                                <div class='flex-start commitment-image'>
                                    <object data='../../assets/svg/signup_tutee_roadmap_4.svg' type=''></object>
                                </div>
                            </div>
                            <div>
                
                            </div>
                            <div class='card'>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <img class='commitment-image' src='../../assets/png/signup_tutee_commitment_1.png' alt=''>
                                    <div class='card__text text-align-left font-size-20'>
                                        <h1>Untuk membangun komitmen bersama</h1>
                                        <p> Jika kita terbiasa untuk membangun komitmen sejak dini, di dunia kerja nanti akan membantu kita untuk tetap disiplin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class='card'>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <div class='card__text text-align-right font-size-20'>
                                        <h1> Agar lebih berkonsentrasi</h1>
                                        <p> Dengan mengurangi distraksi, dapat meningkatkan konsentrasi kita dan menaikkan efektivitas belajar lho
                                        <p>
                                    </div>
                                    <img class='commitment-image' src='../../assets/png/signup_tutee_commitment_2.png' alt=''>
                                </div>
                            </div>
                            <div class='card'>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <img class='commitment-image' src='../../assets/png/signup_tutee_commitment_3.png' alt=''>
                                    <div class='card__text text-align-left font-size-20'>
                                        <h1>Menghargai tutor</h1>
                                        <p> Dengan mematuhi komitmen yang kita buat, kita juga jadi lebih menghargai tutor yang mengajar lho. Jadi mereka juga jadi lebih semangat mengajari kita. </p>
                                    </div>
                                </div>
                            </div>
                            <div class='card'>
                                <div class='flex-container-row flex-center column-gap-40'>
                                    <div class='card__text text-align-right font-size-20'>
                                        <h1>Perjanjian untuk semua sesi</h1>
                                        <p>Komitmen yang kalian tulis sekarang harus kalian tepati di semua sesi tutoring melalui platfotm Pelitaku.</p>
                                    </div>
                                    <img class='commitment-image' src='../../assets/png/signup_tutee_commitment_4.png' alt=''>
                                </div>
                            </div>
                            <form action='' method='POST'> 
                            <div class='flex-container-row flex-center width-full column-gap-40 margin-top-82'>
                                <div class='commitment width-504'>
                                    <div class='font-size-20'>
                                        <p>Saya akan</p>
                                        <ul>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_1'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_2'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_3'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_4'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_5'></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='commitment width-504'>
                                    <div class='font-size-20'>
                                        <p>Saya tidak akan</p>
                                        <ul>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_not_1' value='Menggunakan Ponsel Selama Belajar' readonly></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_not_2'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_not_3'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_not_4'></li>
                                            <li><input class='font-size-20 width-95-percent' type='text' name='will_not_5'></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class='buttons width-full flex-container-row flex-center margin-top-82 column-gap-40' >
                                <input class='button continue' type='submit' value='Selanjutnya' name='submit'>
                                <a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
                                <input type='hidden' name='page' value=5>
                            </div>
                            </form>
                        </div>
                    </div>
                    ";
            break;
        case '5':
            include "../../assets/php/dbcon.php";
            $sql = "INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `phone_number`, `province`, `city`, `district`, `sub_district`, `address`, `profile_photo`, `is_tutor`) 
                VALUES (NULL, '" . $_SESSION["email"] . "', '" . $_SESSION["password"] . "','" . $_SESSION["first_name"] . "', '" . $_SESSION["last_name"] . "', '" . $_SESSION["phone_number"] . "', '" . $_SESSION["provinsi"] . "', '" . $_SESSION["kota/kabupaten"] . "', '" . $_SESSION["kecamatan"] . "', '" . $_SESSION["kelurahan"] . "', '" . $_SESSION["address"] . "', '', '0');
                ";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $sql = "INSERT INTO `tutee` (`id`, `parent_first_name`, `parent_last_name`, `parent_phone_number`, `parent_email`, `will_1`, `will_2`, `will_3`, `will_4`, `will_5`, `will_not_1`, `will_not_2`, `will_not_3`, `will_not_4`, `will_not_5`) 
                VALUES (NULL, '" . $_SESSION["parent_first_name"] . "', '" . $_SESSION["parent_last_name"] . "', '" . $_SESSION["parent_phone_number"] . "', '" . $_SESSION["parent_email"] . "', '" . $_SESSION["will_1"] . "', '" . $_SESSION["will_2"] . "', '" . $_SESSION["will_3"] . "', '" . $_SESSION["will_4"] . "', '" . $_SESSION["will_5"] . "', '" . $_SESSION["will_not_1"] . "', '" . $_SESSION["will_not_2"] . "', '" . $_SESSION["will_not_3"] . "', '" . $_SESSION["will_not_4"] . "', '" . $_SESSION["will_not_5"] . "');
                ";
            if ($conn->query($sql) === TRUE) {
                echo "<script type='text/javascript'>location.href = '../login.php';</script>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
            break;
    }
    ?>
    <?php include '../../assets/php/footer.php' ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>