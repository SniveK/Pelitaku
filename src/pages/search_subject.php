<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../style.css">
    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>

<body class="background">
    <img src="../assets/png/icon_message.png" alt="" class="message-icon">
    <div class="header">
        <object data="../../assets/svg/icon_pelitaku.svg" type="" class="header-icon"></object>
        <p class="push">pembelajaran</p>
        <p>inbox</p>
        <p>profil</p>
    </div>

    <div class="maincontent">
        <?php include "../assets/php/searchbar.php" ?>
        <div style="height: 20px;"></div>

        <div class="search-result">
            <?php
            include '../assets/php/dbcon.php';
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $sql = "SELECT subject,topic FROM class WHERE subject LIKE '%" . $_GET['subject'] . "%' OR topic LIKE '%" . $_GET['subject'] . "%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div><b>" . $row['subject'] . "</b><p>" . $row['topic'] . "</p></div>";
                    }
                } else {
                }
            }
            ?>

        </div>

        <div class="search-nav" align="right">
            <a href=""><img src="../assets/png/icon_left.png" alt=""></a>
            <a href="">1</a>
            <a href="">.</a>
            <a href="">.</a>
            <a href=""><img src="../assets/png/icon_right.png" alt=""></a>
        </div>

        <div style="height: 20px;"></div>
    </div>

    <footer class="footer">
        <div class="footermenu">
            <div>
                <b>Tentang</b>
                <p>Siapa kami? </p>
                <p>Syarat dan Ketentuan</p>
                <p>Kebijakan Privasi</p>
            </div>
            <div>
                <b>Kelas</b>
                <p>Mulai Kelas</p>
                <p>Lihat subjek kami</p>
            </div>
            <div align="right">
                <b>Menjadi tutor</b>
                <p>Keuntungan menjadi tutor</p>
                <p>Daftar menjadi tutor</p>
                <p>Masuk</p>
            </div>
        </div>
        <hr width="95%" align="center">
        <p align="center">© Pelitaku, 2021</p>
    </footer>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>