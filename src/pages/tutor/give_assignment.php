<!DOCTYPE html>

<html lang="id" >

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

	<?php include '../../assets/php/header.php'; ?>
		
	<div class="background">
		<div class="maincontent">
			<p class="title"> Kelas Berlangsung </p>
			<hr width="100%" style="margin: 10px 0 10px 0;">
			<div class="flex-container-row"> 
				<b> Studio Desain Dasar </b>
				<button class="primary push"> Kirim Pesan </button>
			</div>
			<p> 15 Oktober 2021 / 13:00-14:00 </p>
			<button class="secondary"> Angela Narissa </button>
			<b style="margin-top: 20px;"> Tujuan Sesi Kelas </b>
			<p> 
				Tujuan saya di sesi ini adalah untuk belajar membuat garis, Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
				mollit anim id est laborum 
			</p>
			<b style="margin-top: 20px;"> Upload Link Video/File Pembelajaran </b>
			<div class='flex-container-column row-gap-20' id='linkFile'>
				<div class='flex-container-row column-gap-20'>
					<input class="link" id="link" type="text" placeholder="Link/url file"></input>
					<button class='button-email plus-subject' id='tutorSubjectAppend'></button>
				</div>
			</div>
			<b style="margin-top: 20px;"> Buat Tugas </b>
			<textarea style="height:256px; padding: 10px; resize:none;" placeholder="Instruksi Tugas"></textarea>
			<div class="flex-container-row" style="margin-top:80px; column-gap:40px;">
				<button class="primary2 push"> Simpan </button>
				<button class="primary"> Batal </button>
			</div>
		</div>
	</div>
		
		<?php include '../../assets/php/footer.php'; ?>
		
		<script src='../../scripts/addinput.js'></script>
		
    </body>

</html>
