<?php
session_start();

?>
<!DOCTYPE html>

<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css">
	<link rel="stylesheet" href="../../css/maintutor.css">

	<title> Pelitaku </title>
	<link rel="icon" href="logo.png">

</head>

<body>

	<?php include '../../assets/php/header.php'; ?>

	<div class="background">
		<div class="maincontent">
			<div class="menublock">
				<div>
					<p class="title"> Kelas yang akan Datang </p>
					<?php
					include '../../assets/php/dbcon.php';
					$sql = "SELECT * FROM class_session JOIN users ON class_session.tutee_id=users.id  WHERE completed=0 AND tutor_id=" . $_SESSION["id"];
					$result = $conn->query($sql);
					if ($result !== false && $result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<a href="./online_class.php?class_session_id='.$row["class_session_id"].'">
							<div class="tuteeblock">
								<div style="width: 30px;" >
									<p> '.date_format(date_create($row["date"]),"d\nM").' </p>
								</div>
								<div class="horizontal" ></div>
								<div>
									<b> '.$row["first_name"].' '.$row["last_name"].' </b>
									<p> '.$row["class_subject"].' </p>
								</div>
							</div>
						</a>';
						}
					} else {
						echo "No Classes";
					}
					?>
					
					<!-- <div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Angela Narissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div>
					<div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Sabrina Clarissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div> -->
				</div>

				<div>
					<p class="title"> Beri Tugas </p>
					<?php
					include '../../assets/php/dbcon.php';
					$sql = "SELECT * FROM class_session JOIN users ON class_session.tutee_id=users.id  WHERE completed=1 AND tutor_id=" . $_SESSION["id"];
					$result = $conn->query($sql);
					if ($result !== false && $result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<a href="./give_assignment.php?class_session_id='.$row["class_session_id"].'">
							<div class="tuteeblock">
								<div style="width: 30px;" >
									<p> '.date_format(date_create($row["date"]),"d\nM").' </p>
								</div>
								<div class="horizontal" ></div>
								<div>
									<b> '.$row["first_name"].' '.$row["last_name"].' </b>
									<p> '.$row["class_subject"].' </p>
								</div>
							</div>
						</a>';
						}
					} else {
						echo "No Classes";
					}
					?>
					<!-- <div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Sabrina Clarissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div>
					<div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Angela Narissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div>
					<div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Sabrina Clarissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div> -->
				</div>

				<div>
					<p class="title"> Cek Tugas </p>
					<?php
					include '../../assets/php/dbcon.php';
					$sql = "SELECT * FROM class_session JOIN users ON class_session.tutee_id=users.id  WHERE completed=2 AND tutor_id=" . $_SESSION["id"];
					$result = $conn->query($sql);
					if ($result !== false && $result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<a href="./check_assignment.php?class_session_id='.$row["class_session_id"].'">
							<div class="tuteeblock">
								<div style="width: 30px;" >
									<p> '.date_format(date_create($row["date"]),"d\nM").' </p>
								</div>
								<div class="horizontal" ></div>
								<div>
									<b> '.$row["first_name"].' '.$row["last_name"].' </b>
									<p> '.$row["class_subject"].' </p>
								</div>
							</div>
						</a>';
						}
					} else {
						echo "No Classes";
					}
					?>
					<!-- <div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Sabrina Clarissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div>
					<div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Angela Narissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div>
					<div class="tuteeblock">
						<div style="width: 30px;">
							<p> 15 Okt </p>
						</div>
						<div class="horizontal"></div>
						<div>
							<b> Sabrina Clarissa </b>
							<p> Desain Produk 1 </p>
						</div>
					</div> -->
				</div>
			</div>

			<button class="primary"> Buat Group Tutor </button>
		</div>
	</div>

	<?php include '../../assets/php/footer.php'; ?>

</body>

</html>