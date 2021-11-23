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
    <link rel="stylesheet" href="../../css/signup_tutor.css">
</head>

<body class="flex-container-columns">

    <?php include "../../assets/php/header.php"; ?>

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
    var_dump($_SESSION);
    switch ($_SESSION['login']) {
        case '1':
            echo "
                <div class='flex-container-row flex-center margin-bottom-82'>
                    <div class='flex-container-row'>
                        <div class='roadmap'>
                            <object data='../../assets/svg/signup_tutor_roadmap_1.svg' type=''></object>
                        </div>
                        <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' id='signup_tutor_1' action='' method='POST'>
                            <div class='flex-container-row name column-gap-20'>
                                <input required class='width-248' type='text' placeholder='Nama Depan' value='" . $_POST["first_name"] . "' name='first_name' id='tuteeFirstName'>
                                <input required class='width-248' type='text' placeholder='Nama Belakang' value='" . $_POST["last_name"] . "' name='last_name' id='tuteeLastName'>
                            </div>
                            <div class='flex-container-row phone-number column-gap-20'>
                                <input required class='width-50 country-code' type='text' value='+62' disabled>
                                <input required class='width-440' type='text' placeholder='Nomor Ponsel' value='" . $_POST["phone_number"] . "' name='phone_number' id='tuteePhoneNumber' oninput=\"this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');\">
                            </div>
                            <input required class='email width-504' type='email' placeholder='E-mail' value='" . $_POST["email"] . "' name='email' id='tuteeEmail'>
                            $emailError
                            <input required class='password width-504' type='password' placeholder='Kata Sandi' name='password' id='password'>
                            <div id='passwordErrorLabel'></div>
                            <input required class='password width-504' type='password' placeholder='Ulangi Kata Sandi' id='confirm'>
                            <div id='confirmErrorLabel'></div>
                            <div class='flex-container-row flex-center column-gap-40'>
                                <input class='button continue' type='submit' name='submit' value='Selanjutnya' id='next' disabled>
                                <a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
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
                    <form class='form flex-container-column flex-center max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                        <select required class='width-504' name='provinsi' id='province'>
                            <option disabled selected value> -- select an option -- </option>
                        </select>
                        <select required class='width-504' name='kota/kabupaten' id='city'>
        
                        </select>
                        <select required class='width-504' name='kecamatan' id='district'>
        
                        </select>
                        <select required class='width-504' name='kelurahan' id='sub-district'>
        
                        </select>
                        <textarea required class='width-504 address-text-area' placeholder='Alamat' id='address'></textarea>
                        <div class='flex-container-row flex-center column-gap-40'>
                            <input class='button continue' type='submit' name='submit'  value='Selanjutnya' id='next'>
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
                    <div class=' roadmap'>
                        <object data='../../assets/svg/signup_tutor_roadmap_3.svg' type=''></object>
                    </div>
                    <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                        <div class='flex-container-row bank column-gap-20'>
                            <select required class='width-175' name='bank' name='bank' id='bank'>
                                <option value='BCA'>BCA</option>
                                <option value='Mandiri'>Mandiri</option>
                                <option value='BNI'>BNI</option>
                                <option value='Permata'>Permata</option>
                            </select>
                            <input required class='width-320' type='text' placeholder='Nomor Rekening' name='bank_number' id='bankAccountNumber'>
                        </div>
                        <div class='flex-container-row major column-gap-20'>
                            <input required class='width-175 country-code' type='text' placeholder='Fakultas' name='faculty' id='tutorFaculty'>
                            <!-- <input required class='width-320' type='text' placeholder='Jurusan' id='tutorMajor'> -->
                            <select class='width-320' name='major' id='major'>
                                <option disabled selected value> -- select an option -- </option>
                            </select>
                        </div>
                        <div class='flex-container-row gpa column-gap-20'>
                            <input required class='width-72' type='text' placeholder='GPA' name='ipk'>
                            <input required class='width-424' type='text' placeholder='link/url transkrip nilai' name='transcript' id='linkTranscriptGPA'>
                        </div>
                        <div class='flex-container-column row-gap-20' id='tutorSubjects'>
                            <div class='flex-container-row mastered-course column-gap-20'>
                                <!-- <input required class='email width-465' type='email' placeholder='Mata Kuli'  id='tutorEmail'> -->
                                <select class='subject width-465' name='subject_1' id='subject'>
        
                                </select>
                                <button class='button-email plus-subject' id='tutorSubjectAppend'></button>
                            </div>
                        </div>
                        <div class='flex-container-row flex-center column-gap-40'>
                            <input class='button continue' type='submit' name='submit' value='Selanjutnya' id='next'>
                            <a href='../../assets/php/logout.php'><input class='button abort' type='button' value='Batal' id='cancel'></a>
                            <input type='hidden' name='page' value=4>
                        </div>
                    </form>
                </div>
            </div>
            <script src='../../scripts/signup_3.js'></script>
                ";
            break;
        case '4':
            echo "
            <div class='flex-container-row flex-center margin-bottom-82'>
                <div class='flex-container-row'>
                    <div class=' roadmap'>
                        <object data='../../assets/svg/signup_tutor_roadmap_4.svg' type=''></object>
                    </div>
                    <form class='form flex-container-column max-width-600 min-width-550 row-gap-20' action='' method='POST'>
                        <textarea required class='width-504 height-300 reason-text-area' placeholder='Ceritakan tujuan anda mendaftar menjadi tutor' id='address'></textarea>
                        <input required class='width-504' type='text' placeholder='link/url CV'>
                        <div class='flex-container-row flex-center column-gap-40'>
                            <input class='button continue' type='button' value='Selanjutnya' id='next'>
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
            $sql = "INSERT INTO `tutor` (`id`, `bank`, `bank_number`, `about`, `ipk`, `transcript`, `cv`) 
                VALUES (NULL, '" . $_SESSION["bank"] . "', '" . $_SESSION["bank_number"] . "', '" . $_SESSION["about"] . "', '" . $_SESSION["ipk"] . "', '" . $_SESSION["transcript"] . "', '" . $_SESSION["cv"] . "');
                ";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $sql = "SELECT id FROM users where email=\"".$_SESSION["email"]."\"";
            $result = $conn->query($sql);
            if ($result !== false && $result->num_rows > 0) {
                $row = $result ->fetch_assoc();
                $_SESSION["id"]=$row["id"];
            } 
            $subject=1;
            while(isset($_SESSION["subject".$subject])){
                $sql = "INSERT INTO `class_tutor` (`class_id`,`tutor_id`) 
                VALUES ();
                ";
                if ($conn->query($sql) === TRUE) {
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            echo "<script type='text/javascript'>location.href = '../pages/login.php';</script>";
            break;
    }
    ?>


    <?php include '../../assets/php/footer.php' ?>

</body>

</html>