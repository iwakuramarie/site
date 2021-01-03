<?php
function archiveLink () {
	echo '<div class="section numlist centre">';
		echo '<span class="homesubmessage"><b>';
			$file = $_SERVER['PHP_SELF'];
			if ($file == "/home.php") {
				echo '<a href="'.$file.'?post=archive">Search All Posts</a>';
			} else {
				echo '<a href="'.$file.'?post=archive">Search All Posts in '.$_SESSION['title'].'</a>';
			}
		echo '</b></span>';
	echo '</div>';
}

function archive ($includearr) {
	$searches = explode(" ", trim($_GET['search']));
	echo '<div class="archivespan">';
	echo '<table class="centre">';
		echo '<colgroup>';
			echo '<col class="titlecol">';
			echo '<col class="datecol">';
		echo '</colgroup>';
		echo '<tr>';
			echo '<th>Title</th>';
			echo '<th>Date Modified</th>';
		echo '</tr>';
		foreach ($includearr as $post) {
			$link = $post[0];
			$mod = date('Y.m.d H:i', $post[1]);
			$title = file_get_contents($link);
			$linkarr = explode("/", $link);
			$linkarr[sizeof($linkarr) - 1] = "_index.php?post=" . $linkarr[sizeof($linkarr) - 1];
			$link = implode("/", $linkarr);
			$title = explode('<h1>', $title)[1];
			$title = explode('</h1', $title)[0];

			$title = str_replace("\'","'",$title);

			# AND logic
			$cont = 1;
			if (isset($_GET['search'])) {
				foreach ($searches as $search) {
					if (preg_match("/{$search}/i", $title)) {
						$cont = 0;
					}
				}
				if ($cont == 1) {
					continue;
				}
			}
			#if (isset($_GET['search']) && !preg_match("/{$_GET['search']}/i", $title)) {
			#	continue;
			#}
			echo '<tr>';
				echo '<td><a href="'.$link.'">'.$title.'</a></td>';
				echo '<td>'.$mod.' GMT</td>';
			echo '</tr>';
		}
	echo '</table>';
	echo '</div>';
	echo '</div>';
}
?>
