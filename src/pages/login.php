<?php
// session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="flex-container-columns">
    <?php include '../assets/php/header.php'; ?>
    <div class="flex-container-column flex-center margin-top-82 margin-bottom-82">
        <img src="../assets/png/login_pelitaku.png" alt="">
        <div class="flex-container-row column-gap-40 margin-top-82">
            <input class="button login" type="button" value="Masuk" onclick="showLogin()">
            <input class="button abort" type="button" value="Daftar">
        </div>
    </div>
    <!-- Ini hanya untuk desain saja -->


    <?php
    $passwordErr = $emailErr = $password = $email = $dbErr = "";
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST['password']);
        }
        if ($emailErr == "" && $passwordErr == "") {
            include("../assets/php/dbcon.php");
            $sql = "SELECT id,is_tutor FROM users WHERE email = '$email' AND password = '$password'";
            // $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION["id"] = $row["id"];
                $_SESSION["is_tutor"] = $row["is_tutor"];
                echo "<script type='text/javascript'>location.href = '../index.php';</script>";
            } else {
                $dbErr = "email or password is incorrect";
            }
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="login-box hide flex-container-column flex-center margin-top-82 margin-bottom-82 width-650 login-border" id="login">
        <div class="flex-container-row flex-end width-full margin-top-15 margin-right-30">
            <img class="width-30" src="../assets/png/icon_x.png" alt="" onclick="hideLogin()">
        </div>
        <form class="form flex-container-column flex-center row-gap-20 width-380 margin-top-82 margin-bottom-82" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="email width-full" type="email" placeholder="E-mail" id="tuteeEmail" name="email" value=" <?php echo $email ?> ">
            <?php echo $emailErr ?>
            <input class="password width-full" type="password" placeholder="Kata Sandi" id="tuteePassword" name="password">
            <?php echo $passwordErr ?>
            <?php echo $dbErr ?>
            <div class="flex-container-row flex-between width-full">
                <input class="button continue" type="submit" value="Masuk">
                <input class="button abort" type="button" value="Daftar">
            </div>
        </form>
    </div>

    <footer class="flex-container-column flex-center footer">
        <div class="flex-container-row flex-between footer-menu">
            <ul class="footer-menu__left">
                <li><b>Tentang</b></li>
                <li>Siapa kami? </li>
                <li>Syarat dan Ketentuan</li>
                <li>Kebijakan Privasi</li>
                <li>FAQ</li>
            </ul>
            <ul class="footer-menu__center">
                <li><b>Kelas</b></li>
                <li>Mulai Kelas</li>
                <li>Lihat subjek kami</li>
            </ul>
            <ul class="footer-menu__right">
                <li><b>Menjadi tutor</b></li>
                <li>Keuntungan menjadi tutor</li>
                <li>Daftar menjadi tutor</li>
                <li>Masuk</li>
            </ul>
        </div>
        <div class="width-1280">
            <hr class="line">
            <p align="center">© Pelitaku, 2021</p>
        </div>
    </footer>
    <script src="../scripts/login.js"></script>
</body>

</html>