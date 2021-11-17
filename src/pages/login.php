<?php
    // session_destroy();
    if(isset($_SESSION['id'])){
        echo "<script type='text/javascript'>window.history.go(-1)</script>";
    }
    if (!isset($_SESSION)) {
        session_start(); 
    }
    $passwordErr = $emailErr = $password = $email = $dbErr = "";
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<script type='text/javascript'> showLogin()</script>";
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
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body class="flex-container-columns">
    <?php include '../assets/php/header.php'; ?>
    <div class="flex-container-column flex-center margin-top-82 margin-bottom-82">
        <img src="../assets/png/login_pelitaku.png" alt="">
        <div class="flex-container-row column-gap-40 margin-top-82">
            <input class="button login" type="button" value="Masuk" onclick="showLogin()">
            <a href="./tutee/signup_tutee_1.php"><input class="button abort" type="button" value="Daftar"></a>
        </div>
    </div>
    <div class="login-box hide flex-container-column flex-center margin-top-82 margin-bottom-82 width-650 login-border" id="login">
        <div class="flex-container-row flex-end width-full margin-top-15 margin-right-30">
            <img class="width-30" src="../assets/png/icon_x.png" alt="" onclick="hideLogin()">
        </div>
        <form class="form flex-container-column flex-center row-gap-20 width-380 margin-top-82 margin-bottom-82" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="email width-full" type="email" placeholder="E-mail" id="tuteeEmail" name="email" value=" <?php echo $email ?> " required>
            <?php echo $emailErr ?>
            <input class="password width-full" type="password" placeholder="Kata Sandi" id="tuteePassword" name="password" required>
            <?php echo $passwordErr ?>
            <?php echo $dbErr ?>
            <div class="flex-container-row flex-between width-full">
                <input class="button continue" type="submit" value="Masuk">
                <a href="./tutee/signup_tutee_1.php"><input class="button abort" type="button" value="Daftar">  </input></a>
            </div>
        </form>
    </div>
    <?php include "../assets/php/footer.php"; ?>
    <script src="../scripts/login.js"></script>
</body>

</html>