<?php
	echo '<div class="section subdirs centre">';
	echo '<span class="homesubmessage"><b>';
	if ($root == "../") {
		foreach ($scanfiles as $link) {
			$linkname = explode('/', $link)[1];
			echo '<a href="'.$link.$indexfile.'">'.$linkname.'</a> ';
		}
	} elseif ($root == "../../") {
		$upperdirs = getFileList("../");
		# Media subdirs to block, until I put something in them
		$mediaarray = array("Anime");
		foreach ($upperdirs as $dir) {
			if ($dir['type'] == "dir") {
				$dirname = explode("/", $dir['name'])[1];
				$cwd = explode("/", getcwd());
				if ($cwd[sizeof($cwd) - 1] == $dirname) {
					echo '<span class="greyed">'.$dirname.'</span> ';
				# Blocking
				} elseif (in_array($dirname, $mediaarray)) {
					echo '';
				} else {
					echo '<a href="'.$dir['name'].$indexfile.'">'.$dirname.'</a> ';
				}
			}
		}
		echo '<br /><a href="../'.$indexfile.'">Return</a>';
	}
	echo '</b></span>';
	echo '</div>';
?>
