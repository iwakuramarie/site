<?php 
require "".$root."includes/start.php";
echo '<body>';
	echo '<div class="section openaside">';
		echo '<a href="'.$root.'mobile-menu.php">';
			echo 'Navigation';
		echo '</a>';
	echo '</div>';
	echo '<div class="aside">';
		require "".$root."includes/aside.php";
	echo '</div>';
	echo '<div class="content">';
		echo '<div class="section upperdirs">';
			echo '<span class="homesubmessage"><b>';
				$dirs=explode("/", $_SERVER['REQUEST_URI']);

				echo '<a href="'.$root.'home.php">Home</a> ';

				$i = 1;
				$newroot = $root;
				while ($i < sizeof($dirs) - 1){
					echo '> ';
					$dirlink = $dirs[$i];

					if ($dirlink == "Other") {
						$dirlink = "";
						$indexfile = "other.php";
					}

					echo '<a href="'.$newroot.$dirlink.'/'.$indexfile.'">'.$dirs[$i].'</a> ';
					$newroot = "/$dirlink/";

					$i++;
				}
			echo '</b></span>';
		echo '</div>';
		echo '<div class="article">';
?>
