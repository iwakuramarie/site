<?php
if (isset($_GET['post']) == 1 && $_GET['post'] != 'archive') {
	require $root."includes/article-start.php";
	if (!file_exists($_GET['post'])) {
		echo '<div class="lostimg centre">';
			echo '<a class="lostimglink" href="/home.php">';
				echo '<span class="largefont">404 - File Not Found. Press left mouse button to continue.<br /><br />';
				echo 'Guru Meditation #4C4F5354.46494C45</span>';
			echo '</a>';
		echo '</div>';
	} else {
		require $_GET['post'];
	}
} else {
	require $root."includes/default-start.php"; 
	require $root."includes/seemore.php";
	require $root."includes/listing-content.php";
}

if (isset($_GET['post']) == 1 && $_GET['post'] != 'archive') {
	if (!file_exists($_GET['post'])) {
		echo '<style>';
			echo '.article > b {';
				echo 'display: none;';
			echo '}';
		echo '</style>';
	}
		require $root."includes/article-end.php";
} else {
	require $root."includes/default-end.php";
}
?>
