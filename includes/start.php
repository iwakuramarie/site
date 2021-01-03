<?php
	require $root."includes/start-meta.php";
	echo '<link rel="stylesheet" href="'.$root.'styles/default.css" />';
	$usragent=$_SERVER['HTTP_USER_AGENT'];
	if (!strpos($usragent, 'PaleMoon') !== false && $_COOKIE['scrollbar'] !== "true") {
		echo '<link rel="stylesheet" href="'.$root.'styles/noscroll.css" />';
	} else {
		echo '<link rel="stylesheet" href="'.$root.'styles/scroll.css" />';
	}
	echo '<link rel="stylesheet" href="'.$root.'styles/fonts.css" />';
	echo '<link rel="stylesheet" href="'.$root.'styles/cursor.css" />';
echo '</head>';
?>
