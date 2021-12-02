<?php
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/ongoingclass.css">
	<link rel="stylesheet" href="../style.css">


	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body class="background">

	<?php

	include '../assets/php/header.php';
	include '../assets/php/dbcon.php';
	$sql = "SELECT * FROM class_session WHERE users.id=" . $_SESSION["id"] . " SORT BY completed";
	$result = $conn->query($sql);
	if ($result !== false && $result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		// echo "Error updating record: " . $conn->error;
		// echo "<br>";
		// echo $sql;
	}
	?>
	<div class="maincontent">
		<p class="title"> Kelas Berlangsung </p>
		<hr>
		<div>
			<div class="ongoing">
				<div style="width: 64px;">
					<p class="ongoingdate"> 29 Nov </p>
				</div>
				<div style="width:728px; padding:0 67px 0 67px;">
					<p class="ongoingheading"> Gambar 2</>
					<p class="ongoingsubheading"> Anda belum menyelesaikan 1 tugas </p>
				</div>
				<div style="display: flex; align-items: center;">
					<button class="primary"> Selesaikan </button>
				</div>
			</div>
			<div class="ongoing">
				<div style="width: 64px;">
					<p class="ongoingdate"> 15 Okt </p>
				</div>
				<div style="width:728px; padding:0 67px 0 67px;">
					<p class="ongoingheading"> Gambar 2</>
					<p class="ongoingsubheading"> Anda belum menyelesaikan 1 tugas </p>
				</div>
				<div style="display: flex; align-items: center;">
					<button class="primary"> Selesaikan </button>
				</div>
			</div>
		</div>

		<p class="title" style="margin-top: 56px;"> Riwayat Kelas </p>
		<hr>
		<div>
			<?php
			include '../assets/php/dbcon.php';
			$sql = "SELECT * FROM class_session WHERE tutee_id=" . $_SESSION["id"] . " AND completed=0 LIMIT 5";
			// echo $sql;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<div class="history">
					<p style="margin-right: 107px;"> ' . substr($row["date"], 8, 2) . '/' . substr($row["date"], 5, 2) . ' </p>
					<p> ' . $row["class_subject"] . ' </p>
					<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
				</div>';
				}
			} else {
				echo "No Results";
			}

			?>
			<div class="history">
				<p style="margin-right: 107px;"> 15/09 </p>
				<p> Studio Desain Dasar </p>
				<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
			</div>
			<div class="history">
				<p style="margin-right: 107px;"> 08/09 </p>
				<p> Sejarah </p>
				<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
			</div>
			<div class="history">
				<p style="margin-right: 107px;"> 25/08 </p>
				<p> Gambar 2 </p>
				<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
			</div>
			<div class="history">
				<p style="margin-right: 107px;"> 18/08 </p>
				<p> Gambar 2 </p>
				<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
			</div>
			<div class="history">
				<p style="margin-right: 107px;"> 12/08 </p>
				<p> Studio Desain Dasar </p>
				<a href="" class="push"><img src="../assets/png/icon_right.png" alt=""></a>
			</div>
		</div>

		<div class="search-nav" align="right">
			<input class="navimage" type="submit" style="background-image: url(../assets/png/icon_left.png);" value="" href=""></input>
			<input type="submit" href="" value="1"></input>
			<input type="submit" href="" value="."></input>
			<input type="submit" href="" value="."></input>
			<input class="navimage" type="submit" style="background-image: url(../assets/png/icon_right.png)" value="" href=""></input>
		</div>

	</div>

	<?php include "../assets/php/footer.php"; ?>

</body>

</html>