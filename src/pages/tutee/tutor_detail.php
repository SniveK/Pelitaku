<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/tutordetail.css">

	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>

	<?php include '../../assets/php/header.php'; ?>
	<?php
	include "../../assets/php/dbcon.php";
	// var_dump($_SESSION);
	$sql = "SELECT * FROM users JOIN tutor on users.id=tutor.id WHERE users.id=" . $_GET['tutor-id'];
	$result = $conn->query($sql);
	if ($result !== false && $result->num_rows > 0) {
		$row = $result->fetch_assoc();
	} else {
		echo "Error updating record: " . $conn->error;
	}
	$tutorName= $row["first_name"].' '.$row["last_name"] ;
	?>
	<div class="background">
		<div class="maincontent">
			<div class="profile">
				<img src='../../assets/uploads/profile_pictures/<?php echo $row["id"] . "." . $row["profile_photo"]; ?>' alt="Gambar Tutor" width="200px" height="270px">
				<div class="profiledetail">
					<div class="heading">
						<div>
							<p style="font-size:22px; font-weight:bold;"> <?php echo $row["first_name"] . " " . $row["last_name"] ?>, 19 </p>
							<p style="font-size:18px;"> Desain produk 2019 </p>
						</div>
						<div class="rating">
							<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="50px"> </div>
							<div class="star-yellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="50px"> </div>
						</div>
					</div>
					<hr width="100%">
					<b> Tentang <?php echo $row["first_name"] ?> </b>
					<p> <?php echo $row["about"] ?> </p>
					<p> IPK: <?php echo $row["ipk"] ?> </p>
					<p> Alamat: <?php echo $row["address"] ?> </p>
					<p> CV: <a href=""> <?php echo $row["cv"] ?> </a> </p>
					<p> Waktu respon: 2 jam </p>
				</div>
			</div>

			<div class="reviewtutor">
				<p class="title"> Review Tutor </h2>
					<?php
					include '../../assets/php/dbcon.php';
					$sql = "SELECT * FROM tutor_review JOIN users ON tutor_review.tutee_id=users.id WHERE tutor_review.tutor_id=" . $_GET['tutor-id'];
					// echo $sql;
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<div class="reviewlist">
						<div class="identity">
							<b> ' . $row["first_name"] . " " . $row["last_name"] . ' </b>
							<p> CONTOH CONTOH, 2050</p>
						</div>
						<div style="border: 0.1px solid grey"> </div>
						<div class="reviewtext">
							<p> ' . $row["review"] . ' </p>
						</div>
						<div class="rating">
							<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="40px"> </div>
							<div class="star-yellow" style="width:' . (round($row["rating"]) * 30) . 'px; overflow:hidden"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="40px" > </div>
						</div>
					</div>';
						}
					} else {
						echo "No Results";
					}

					?>

				<div class="reviewlist">
					<div class="identity">
						<b> Sabrina Clarissa </b>
						<p> Desain produk, 2020 </p>
					</div>
					<div style="border: 0.1px solid grey"> </div>
					<div class="reviewtext">
						<p> Penjelasan jelas </p>
					</div>
					<div class="rating">
						<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="40px"> </div>
						<div class="star-yellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="40px"> </div>
					</div>
				</div>
				<div class="reviewlist">
					<div class="identity">
						<b> Darryl Prabowo </b>
						<p> Desain produk, 2020 </p>
					</div>
					<div style="border: 0.1px solid grey"> </div>
					<div class="reviewtext">
						<p> Tutor baik dan ramah sekali</p>
					</div>
					<div class="rating">
						<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="40px"> </div>
						<div class="star-yellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="40px"> </div>
					</div>
				</div>
			</div>

			<div style="height: 20px"></div>
			<button class="secondary push"> lihat semua </button>
			<form action="./booking.php" method="post">
			<div class="nextcancel">
				
					<input type="text" name="subject-tutor" value="<?php echo $_GET["subject-tutor"] ?>" hidden>
					<input type="text" name="tutor-id" value="<?php echo $_GET["tutor-id"] ?>" hidden>
					<input type="text" name="tutor-name" value="<?php echo $tutorName?>" hidden>
					<button class="primary1 push" type="submit"> Selanjutnya </button>
				
				<button class="primary2"> Batal </button>
			</div>
			</form>
		</div>

	</div>

	<?php include "../../assets/php/footer.php"; ?>

</body>

</html>