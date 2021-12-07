<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include '../../assets/php/dbcon.php';
	$index = 1;
	$links = "";
	while (isset($_POST["link_" . $index]) && $_POST["link_" . $index] != "") {
		$links .= $_POST["link_" . $index];
		$links .= "|";
		$index++;
	}
	// echo $links;

	$sql = 'UPDATE `class_session` SET `hw_instructions`=\'' . $_POST["instructions"] . '\',`hw_link`=\'' . $links . '\' WHERE class_session_id=' . $_POST["class_session_id"];
	$result = $conn->query($sql);
	// echo $sql;
	if ($conn->query($sql) === TRUE) {
		// echo "<script type='text/javascript'>location.href = './index.php';</script>";
	} else {
		echo "Error updating record: " . $conn->error;
	}
}
?>
<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/classdetail.css">
	<link rel="stylesheet" href="../../css/signup_tutor.css">

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
	$first = explode("|", $row["hw_link"])[0];
	?>
	<?php include '../../assets/php/header.php'; ?>

	<form action="" method="post">
		<div class="background">
			<div class="maincontent">
				<p class="title"> Kelas Berlangsung </p>
				<hr width="100%" style="margin: 10px 0 10px 0;">
				<div class="flex-container-row">
					<b> <?php echo $row["class_subject"] ?> </b>
					<button class="primary push"> Kirim Pesan </button>
				</div>
				<p> <?php echo date_format(date_create($row["date"]), "j F Y") . "/" . $row["time_start"] . "-" . $row["time_end"] ?> </p>
				<button class="secondary"> <?php echo $row["first_name"] . " " . $row["last_name"] ?> </button>
				<b style="margin-top: 20px;"> Tujuan Sesi Kelas </b>
				<p>
					<?php echo $row["purpose"] ?>
				</p>
				<b style="margin-top: 20px;"> Upload Link Video/File Pembelajaran </b>
				<div class='flex-container-column row-gap-20' id='linkFile'>
					<div class='flex-container-row column-gap-20'>
						<input class="link" id="link" name="link_1" type="text" placeholder="Link/url file" value="<?php echo $first ?>"></input>
						<button class='button-email plus-subject' id='tutorSubjectAppend'></button>
					</div>
				</div>
				<b style="margin-top: 20px;"> Buat Tugas </b>
				<textarea style="height:256px; width:1024px; padding: 10px; resize:none;" name="instructions" placeholder="Instruksi Tugas"><?php echo $row["hw_instructions"] ?></textarea>
				<input type="text" name="class_session_id" value="<?php echo $_GET["class_session_id"] ?>" hidden>
				<div class="flex-container-row" style="margin-top:80px; column-gap:40px;">
					<button class="primary2 push" type="submit"> Simpan </button>
					<!-- <button class="primary" disabled> Batal </button> -->
				</div>
			</div>
		</div>
	</form>
	<script src='../../scripts/addinput.js'></script>

	<?php include '../../assets/php/footer.php';
	foreach (explode("|", $row["hw_link"]) as $a) {
		if ($first != "") {
			$first = "";
		} else {
			echo ' <script>addLink("' . $a . '"); </script>';
		}
	} ?>



</body>

</html>