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

<body>

    <?php include '../assets/php/header.php'; ?>

    <div class="background">
        <div class="maincontent">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <?php include '../assets/php/searchbar.php'; ?>

                <div style="height: 20px;"></div>

                <div class="search-result">
                    <?php
                    if (empty($_GET["subject"])) {
                        $_GET["subject"] = '';
                    }
                    if (empty($_GET["offset"])) {
                        $_GET["offset"] = 0;
                    }
                    include '../assets/php/dbcon.php';
                    $sql = "SELECT subject,topic FROM class WHERE subject LIKE '%" . $_GET["subject"] . "%' OR topic LIKE '%" . $_GET["subject"] . "%' LIMIT 18 OFFSET " . $_GET["offset"] . "";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div><b>" . $row['subject'] . "</b><p>" . $row['topic'] . "</p></div>";
                        }
                    } else {
                        echo "DB ERROR: " . $conn->error;
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
            </form>
            <div style="height: 20px;"></div>
        </div>
    </div>

    <?php include '../assets/php/footer.php'; ?>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>