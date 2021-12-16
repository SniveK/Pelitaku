<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/classdetail.css">

	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>
	<?php
	include '../../assets/php/dbcon.php';
	$sql = "SELECT * FROM class_session JOIN users ON class_session.tutee_id=users.id JOIN tutee ON class_session.tutee_id=tutee.id WHERE class_session_id=" . $_GET["class_session_id"];
	$result = $conn->query($sql);
	if ($result !== false && $result->num_rows > 0) {
		// echo $sql;
		$row = $result->fetch_assoc();
	} else {
		// echo $sql;
	}
	?>
	<?php include '../../assets/php/header.php'; ?>

	<div class="background">
		<div class="maincontent">
			<p class="title"> Cek Tugas </p>
			<hr width="100%" style="margin: 10px 0 10px 0;">
			<div class="flex-container-row">
				<b> <?php echo $row["class_subject"] ?> </b>
				<button class="primary push"> Kirim Pesan </button>
			</div>
			<p>  <?php echo date_format(date_create($row["date"]), "j F Y") . "/" . $row["time_start"] . "-" . $row["time_end"] ?> </p>
			<button class="secondary"> <?php echo $row["first_name"] . " " . $row["last_name"] ?> </button>
			<b style="margin-top: 20px;"> Tujuan Sesi Kelas </b>
			<p>
			<?php echo $row["purpose"] ?>
			</p>
			<b style="margin-top: 20px;"> Rekaman Kelas </b>
			<a href=""> <?php echo $row["hw_recording"] ?> </a>
			<b style="margin-top: 20px;"> Instruksi Tugas </b>
			<p>
			<?php echo $row["hw_instructions"] ?>
			</p>
			<b style="margin-top: 20px;"> Upload Tugas </b>
			<?php

				foreach (explode("|",$row["hw_link"]) as $a) {
					echo '<a href=""> '.$a.' </a>';
				}
			?>
			<!-- <a href=""> drive.google.com/asdfghjkl1 </a>
			<a href=""> drive.google.com/asdfghjkl2 </a> -->
			<div class="flex-container-row" style="margin-top:80px; column-gap:40px;">
				<button class="primary2 push"> Konfirmasi </button>
				<button class="primary" onclick="top.location.href = './index.php'"> Batal </button>
			</div>

		</div>
	</div>

	<?php include '../../assets/php/footer.php'; ?>

</body>

</html>