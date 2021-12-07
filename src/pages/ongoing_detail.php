<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../css/classdetail.css">

	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>

	<?php
	include '../assets/php/header.php';
	include '../assets/php/dbcon.php';
	$sql = "SELECT * FROM class_session JOIN users ON class_session.tutor_id=users.id  WHERE class_session_id=" . $_POST["class_session_id"];
	$result = $conn->query($sql);
	if ($result !== false && $result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		echo "Error updating record: " . $conn->error;
		echo "<br>";
		echo $sql;
	}
	?>

	<div class="background">
		<div class="maincontent">
			<p class="title"> Kelas Berlangsung </p>
			<hr width="100%" style="margin: 10px 0 10px 0;">
			<div class="flex-container-row">
				<b> <?php echo $row["class_subject"] ?> </b>
				<!-- <button class="primary push"> Kirim Pesan </button> -->
			</div>
			<p> <?php echo date_format(date_create($row["date"]), "j F Y") ?> / <?php echo $row["time_start"] ?>-<?php echo $row["time_end"] ?> </p>
			<button class="secondary"> <?php echo $row["first_name"] . " " . $row["last_name"] ?> </button>
			<b style="margin-top: 20px;"> Tujuan Sesi Kelas </b>
			<p>
				<?php echo $row["purpose"] ?>
			</p>
			<b style="margin-top: 20px;"> Link Kelas </b>
			<a href=""> https://uph-edu.zoom.us/jaskndlkasdklnasdknk </a>

		</div>
	</div>

	<?php include '../assets/php/footer.php'; ?>

</body>

</html>