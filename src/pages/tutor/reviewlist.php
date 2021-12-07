<?php
session_start();
?>
<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/review.css">

	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>

	<?php include '../../assets/php/header.php'; ?>

	<div class="background">
		<div class="maincontent">
			<div class="profile">
				<img src="../../assets/png/contoh_tutor.png" alt="Gambar Tutor" class="profileimage">
				<div class="profiledetail">
					<div class="heading">
						<div>
							<p style="font-size:22px; font-weight:bold;"> Claresta Yuliana Halim, 19 </p>
							<p style="font-size:20px;"> Desain produk 2019 </p>
						</div>
						<div class="rating">
							<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="50px"> </div>
							<div class="star-yellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="50px"> </div>
						</div>
					</div>
					<hr width="896px">
				</div>
			</div>

			<div class="reviewtutor">
				<div class="reviewheading">
					<p class="title"> Review Tutor </p>
					<div>
						<form action="" method="post">
							<select class="search-filter" name="matkul" id="matkul" onchange="this.form.submit()">
								<?php
								include '../../assets/php/dbcon.php';
								$sql = "SELECT * FROM class_tutor  WHERE tutor_id=" . $_SESSION["id"];
								// echo $sql;
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									$first="";
									while ($row = $result->fetch_assoc()) {
										if($first==""){
											$first=$row["class_subject"];
										}
										if($row["class_subject"]==$_POST["matkul"]){
											echo '<option value="' . $row["class_subject"] . '"selected>' . $row["class_subject"] . '</option>';	
										}else{
											echo '<option value="' . $row["class_subject"] . '">' . $row["class_subject"] . '</option>';
										}
										
									}
								}

								?>
								<!-- <option value="desainp1">Desain Produk 1</option>
							<option value="gambar2">Gambar 2</option>
							<option value="grouptutoring">Group Tutoring</option> -->
								<!--Berdasarkan mata kuliah yang mereka ajar +group tutoring-->
							</select>
						</form>
					</div>
				</div>
				<?php
				// echo $first;
				include '../../assets/php/dbcon.php';
				if(isset($_POST["matkul"])){
					$sql = "SELECT * FROM tutor_review JOIN users ON tutor_review.tutee_id=users.id WHERE tutor_review.tutor_id=" . $_SESSION["id"]." AND class_subject=\"".$_POST["matkul"]."\"";
					// echo $sql;
				}else{
					$sql = "SELECT * FROM tutor_review JOIN users ON tutor_review.tutee_id=users.id WHERE tutor_review.tutor_id=" . $_SESSION["id"]." AND class_subject=\"".$first."\"";
				}
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
				<!-- <div class="reviewlist">
					<div class="identity"> 
						<b> Erica Milenia </b>
						<p> Desain produk, 2020 </p>
					</div>
					<div style="border: 0.1px solid grey"> </div>
					<div class="reviewtext"> 
						<p> Tutor baik dan ramah sekali </p>
					</div>
					<div class="rating">
						<div class="star-grey"> <img src="../../assets/png/starbar_grey.png" alt="grey stars" height="40px"> </div>
						<div class="star-yellow"> <img src="../../assets/png/starbar_yellow.png" alt="yellow stars" height="40px"> </div>
					</div>
				</div>
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
				</div> -->
			</div>

			<div style="height: 20px"></div>

			<div class="search-nav" align="right">
				<input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_left.png);" value="" href=""></input>
				<input type="submit" href="" value="1"></input>
				<input type="submit" href="" value="."></input>
				<input type="submit" href="" value="."></input>
				<input class="navimage" type="submit" style="background-image: url(../../assets/png/icon_right.png)" value="" href=""></input>
			</div>

			<div class="nextcancel">
				<button class="primary2 push"> Kembali </button>
			</div>
		</div>

	</div>

	<?php include '../../assets/php/footer.php'; ?>

</body>

</html>