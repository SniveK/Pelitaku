<!-- // $_SESSION['LAST_ACTIVITY'] = time(); -->
<?php
$root = $_SERVER["DOCUMENT_ROOT"];
if (isset($_SESSION['is_tutor'])) {
	if ($_SESSION['is_tutor']) {
		echo "
			<div class='header'>
				<div class='headercontent'>
					<a href='../../index.php'><img src='../../assets/png/icon_pelitaku.png' class='header-icon' alt='logo Pelitaku'></a>
					<div>
						<a href='../../pages/ongoing_class.php'>pembelajaran</a>
						<a href=''>jadwal</a>
						<a href='../../pages/tutor/profile.php'>profil</a>
					</div>
				</div>
			</div>";
	} else {
		echo "
			<div class='header'>
				<div class='headercontent'>
					<a href='../../index.php'><img src='../../assets/png/icon_pelitaku.png' class='header-icon' alt='logo Pelitaku'></a>
					<div>
						<a href='../../pages/ongoing_class.php'>pembelajaran</a>
						<a href='../../pages/tutee/profile.php'>profil</a>
					</div>
				</div>
			</div>
			";
	}
} else {
	echo "
	<div class='header'>
		<div class='headercontent'>
			<a href='../../index.php'><img src='../../assets/png/icon_pelitaku.png' class='header-icon' alt='logo Pelitaku'></a>
			<a href='../../pages/login.php' class='push'>masuk</a>
		</div>
	</div>
	";
}
// if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
// 	// request 30 minates ago
// 	session_destroy();
// 	session_unset();
// }
// $_SESSION['LAST_ACTIVITY'] = time();

/* Buat yg kosong headernya :)

<div class='header'>
	<div class='headercontent' style="justify-content: flex-start; width: 1280px;">
		<object data='./assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
	</div>
</div>

*/
