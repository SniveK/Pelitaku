<!DOCTYPE html>

<html lang="id" >

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
	$sql = "SELECT * FROM users JOIN tutee on users.id=tutee.id WHERE users.id=" . $_SESSION["id"];
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
				<b> Studio Desain Dasar </b>
				<button class="primary push"> Kirim Pesan </button>
			</div>
			<p> 15 Oktober 2021 / 13:00-14:00 </p>
			<button class="secondary"> Claresta Halim </button>
			<b style="margin-top: 20px;"> Tujuan Sesi Kelas </b>
			<p> 
				Tujuan saya di sesi ini adalah untuk belajar membuat garis, Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
				mollit anim id est laborum 
			</p>
			<b style="margin-top: 20px;"> Link Kelas </b>
			<a href=""> https://uph-edu.zoom.us/jaskndlkasdklnasdknk </a>
			
		</div>
	</div>
		
		<?php include '../assets/php/footer.php'; ?>
		
    </body>

</html>
