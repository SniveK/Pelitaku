<?php
if (isset($_SESSION['is_tutor'])) {
	if ($_SESSION['is_tutor']) {
		echo "
			<div class='header'>
				<object data='./assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
				<p class='push'>pembelajaran</p>
				<p>jadwal</p>
				<p>inbox</p>
				<p>profil</p>
			</div>
			";
	} else {
		echo "
			<div class='header'>
				<object data='./assets/svg/icon_pelitaku.svg' type='' class='header-icon'></object>
				<p class='push'>pembelajaran</p>
				<p>inbox</p>
				<p>profil</p>
			</div>
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
