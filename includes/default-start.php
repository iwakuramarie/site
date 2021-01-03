<?php 

$indexfile="_index.php";

function getFileList($dir) {
	// array to hold return value
	$retval = [];

	// add trailing slash if gone
	if(substr($dir, -1) != "/") {
		$dir .= "/";
	}

	// open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read())) {
	// skip hide files
		if($entry{0} == ".") continue;
		if(is_dir("{$dir}{$entry}")) {
			$retval[] = [
				'name' => "{$dir}{$entry}/",
				'type' => filetype("{$dir}{$entry}"),
				'size' => 0,
				'lastmod' => filemtime("{$dir}{$entry}")
			];
		} elseif(is_readable("{$dir}{$entry}")) {
			$retval[] = [
				'name' => "{$dir}{$entry}",
				'type' => mime_content_type("{$dir}{$entry}"),
				'size' => filesize("{$dir}{$entry}"),
				'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}
	$d->close();

	return $retval;
}

$inc = 0;
if (!isset($scanfiles)) {
	$scanfiles = array("./");
}

foreach ($scanfiles as $scan) {
	$filearr = getFileList($scan);
	foreach ($filearr as $file) {
		if (!preg_match("/{$indexfile}/", $file['name']) && preg_match("/.php/", $file['name'])) {
			$includearr[$inc] = array($file['name'], $file['lastmod']);
			$inc = $inc + 1;
		}
	}
}

usort ($includearr, function($a, $b) {
	return $b[1] <=> $a[1];
});

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
	if (basename($_SERVER['PHP_SELF']) == "home.php") {
		require "homepanel.php";
	} elseif (basename($_SERVER['PHP_SELF']) == "_index.php") {
		require "blogpanel.php";
		if ((sizeof($scanfiles) > 1 || $root == "../../") && $_GET['post'] != 'archive') {
			require "subdirs.php";
		}
	}
?>
