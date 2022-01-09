<?php
session_start();
if (!isset($_GET["subject-tutor"])) {
	echo "<script type='text/javascript'>window.history.go(-1)</script>";
}
?>

<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/search.css">
	<link rel="stylesheet" href="../../css/profile.css">
	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>

	<?php include '../../assets/php/header.php'; ?>

	<div class="background">
		<div class="maincontent">
			<?php
			// include '../../assets/php/searchbar.php';
			// include '../../assets/php/dbcon.php';
			// $sql = "SELECT * FROM class WHERE subject LIKE '%" . $_GET["subject"] . "%' OR description LIKE '%" . $_GET["subject"] . "%' LIMIT 18 OFFSET " . $_GET["offset"] . "";
			// $result = $conn->query($sql);
			// if ($result->num_rows > 0) {
			// 	while ($row = $result->fetch_assoc()) {
			// 		echo "<div><b>" . $row['subject'] . "</b><p>" . $row['description'] . "</p></div>";
			// 	}
			// } else {
			// 	echo "No Results";
			// }
			?>

			<div class="searchtitle">
				<h2>
					Tutor <?php echo $_GET["subject-tutor"] ?> yang tersedia berdasarkan
				</h2>
				<select class="search-filter" name="cars" id="cars">
					<option value="terdekat">Terdekat</option>
					<option value="penilaian">Penilaian</option>
					<option value="tingkat">Tingkat</option>
				</select>
				<div class="position-relative">
					<form action="">
						<input type="text" placeholder="Cari lokasi" class="input-location">
						<input src="../../assets/png/icon_gps.png" alt="Icon magnifying glass" class="gps-icon" type="image" style="border: none">
					</form>
				</div>
			</div>

			<div class="specialpicks">
				<div>
					<h3>Special Pick</h3>
				</div>
				<div class="tutorpilihan flex-between">
					<div>
						<img src="../../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
					<div>
						<img src="../../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
					<div>
						<img src="../../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
					<div>
						<img src="../../assets/png/contoh_tutor.png" alt="Gambar Tutor" width="200px" height="270px">
						<div class="tutorpic"> <img src="../../assets/png/white_overlay.png" alt=""> </div>
						<div class="tutorname"> Claresta Y. Halim </div>
						<div class="tutormajor"> Desain Produk, 2019 </div>
						<div class="starratinggrey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars"> </div>
						<div class="starratingyellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" style="width: 81px; margin-left: 0px;"> </div>
					</div>
				</div>
			</div>

			<div class="search-result">
				<?php
				include '../../assets/php/dbcon.php';
				$sql = "SELECT users.id,users.first_name,users.last_name,users.city,users.province,tutor.rating,tutor.major,users.profile_photo FROM users, tutor,class_tutor WHERE  class_tutor.tutor_id = tutor.id AND class_tutor.tutor_id =users.id AND class_tutor.class_subject=\"" . $_GET["subject-tutor"] . "\" LIMIT 18 "; //OFFSET " . $_GET["offset"] . "";
				// echo $sql;
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						// echo "LOL";
						// echo $row;
						echo '
						<div onclick="location.href = `./tutor_detail.php?tutor-id='.$row['id'].'&subject-tutor='.$_GET["subject-tutor"].'`">
							<div class="flex-container-row" style="align-content:center;">
								<div style="margin: auto 80px auto 0;">
									<img src="../../assets/uploads/profile_pictures/' . $row["id"] . '.' . $row["profile_photo"] . '" alt="" class="avatar" width="45px">
								</div>
								<div class="position-relative">
									<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars"> </div>
									<div class="star-yellow" style="width:' . (round($row["rating"]) * 16) . 'px; overflow: hidden;"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars"> </div>
								</div>
							</div>
							<hr width="100%" style="margin:5px 0 5px 0;">
							<div>
								<p>' . $row["major"] . ', 2018</p>
								<b>' . $row["first_name"] . ' ' . $row["last_name"] . '</b>
								<p>' . $row["city"] . ', ' . $row["province"] . '</p>
							</div>
						</div>
						';
						
					}
				} else {
					echo "No Results";
				}
				?>
				
			</div>
			<div class="search-nav" align="right">
				<input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_left.png);" value="" href=""></input>
				<input type="submit" href="" value="1"></input>
				<input type="submit" href="" value="."></input>
				<input type="submit" href="" value="."></input>
				<input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_right.png)" value="" href=""></input>
			</div>

		</div>
	</div>

	<?php include "../../assets/php/footer.php"; ?>

	<script src="script.js" type="application/javascript"></script>
</body>

</html>