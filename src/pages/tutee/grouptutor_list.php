<?php 
session_start();
?>
<!DOCTYPE html>

<html lang="id" >

    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../style.css">
		<link rel="stylesheet" href="../../css/grouptutorlist.css">
		
		<title> Pelitaku </title>
		<link rel="icon" href="../../assets/png/icon_pelitaku1.png">
		
    </head>
	
    <body>

	<?php include '../../assets/php/header.php'; ?>
		
	<div class="background">
		<div class="maincontent">
			
			<?php include '../../assets/php/searchbar.php';?>
			
			<a href="../../pages/tutee/grouptutoring.php">
			
			<div class="flex-container-column row-gap-40">
				<img src="../../assets/png/banner3.png" alt="" width="100%">
				<img src="../../assets/png/banner4.png" alt="" width="100%">
				<img src="../../assets/png/banner3.png" alt="" width="100%">
				<img src="../../assets/png/banner4.png" alt="" width="100%">
				<img src="../../assets/png/banner3.png" alt="" width="100%">
			</div>
			
			<div class="search-nav" align="right">
				<a href=""><img src="../../assets/png/icon_left.png" alt=""></a>
				<a href="">1</a>
				<a href="">.</a>
				<a href="">.</a>
				<a href=""><img src="../../assets/png/icon_right.png" alt=""></a>
			</div>
			
		</div>
		
	</div>
		
		<?php include '../../assets/php/footer.php'; ?>
		
    </body>

</html>
