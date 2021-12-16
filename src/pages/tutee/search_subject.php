<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/search.css">
    <link rel="stylesheet" href="../../style.css">
    <title> Pelitaku </title>
    <link rel="icon" href="logo.png">

</head>

<body>

    <?php 
    include '../../assets/php/header.php';
    if (empty($_GET["subject"])) {
        $_GET["subject"] = '';
    }
    if (empty($_GET["offset"])) {
        $_GET["offset"] = 0;
    }
    ?>

    <div class="background">
        <div class="maincontent">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <?php include '../../assets/php/searchbar.php'; ?>
                <input type="text" name="offset" value="<?php echo $_GET["offset"] ?>" hidden>
            </form>
            <div style="height: 20px;"></div>
            <!-- <form action="./search_tutor.php" method="get"> -->
                <div class="search-subject">
                    <?php

                    include '../../assets/php/dbcon.php';
                    $sql = "SELECT * FROM class WHERE subject LIKE '%" . $_GET["subject"] . "%' OR description LIKE '%" . $_GET["subject"] . "%' LIMIT 18 OFFSET " . $_GET["offset"] . "";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div onclick='location.href = `./search_tutor.php?subject-tutor=".$row['subject']."`' type='submit' name='subject-tutor' value='".$row['subject']."'> <b>" . $row['subject'] . "</b><p>" . $row['description'] . "</p></div>";
                        }
                    } else {
                        echo "No Results";
                    }
                    ?>
                </div>
            <!-- </form> -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                <div class="search-nav" align="right">
                    <input type="text" name="subject" value="<?php echo $_GET["subject"] ?>" hidden>
                    <input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_left.png);" value="" href=""></input>
                    <input type="submit" href="" value="1"></input>
                    <input type="submit" href="" value="."></input>
                    <input type="submit" href="" value="."></input>
                    <input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_right.png)" value="" href=""></input>
                </div>
            </form>
            <div style="height: 20px;"></div>
        </div>
    </div>

    <?php include '../../assets/php/footer.php'; ?>

    <script src="script.js" type="application/javascript"></script>
</body>

</html>