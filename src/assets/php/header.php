<?php
$_SESSION['LAST_ACTIVITY'] = time();
$root = $_SERVER["DOCUMENT_ROOT"];

if (isset($_SESSION['is_tutor'])) {
	if ($_SESSION['is_tutor']) {
		echo "
			<header class='header'>
				<nav class='flex-container-row flex-between width-1280 height-full' style='padding-right: 3rem;'>
				<object data='../../assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
				<div class='flex-container-row column-gap-20'>
					<p class='push'>pembelajaran</p>
					<p>jadwal</p>
					<p>inbox</p>
					<p>profil</p>
				</div>
				</nav>
			</header>
			";
	} else {
		echo "
			<header class='header'>
				<nav class='flex-container-row flex-between width-1280 height-full' style='padding-right: 3rem;'>
				<object data='../../assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
				<div class='flex-container-row column-gap-20'>
					<p class='push'>pembelajaran</p>
					<p>inbox</p>
					<p>profil</p>
				</div>
				</nav>
			</header>
			";
	}
} else {
	// echo
	// "<div class='header'>

	// 	<object data='./assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
	// 	<a href='../../pages/login.php' class='push'>masuk</a>
	// </div>";
	echo
	" <header class='header'>
	<nav class='flex-container-row flex-between width-1280 height-full' style='padding-right: 3rem;'>
		<object data='../../assets/svg/icon_pelitaku.svg' type=''></object>
		<a href='../../pages/login.php' class='push'>masuk</a>
	</nav>
	</header>";
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
	// request 30 minates ago
	session_destroy();
	session_unset();
}
$_SESSION['LAST_ACTIVITY'] = time();
