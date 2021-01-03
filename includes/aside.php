<?php
if (!$root) {
	$returnlink = "/";
} else {
	$returnlink = $root;
}
$indexfile = "_index.php";
$heads = array("head.gif", "head2.gif", "head3.gif", "head4.gif", "head5.gif", "head6.gif", "head7.gif");
$usehead = array_rand($heads);

function asideLink ($linkname, $page, $root) {
	$currentfile = basename($_SERVER['PHP_SELF']);
	if ($currentfile == $page) {
		echo '<li class="asideitem greyed">'.$linkname.'</li>';
	} else {
		echo '<li class="asideitem"><a href="'.$root.$page.'">'.$linkname.'</a></li>';
	}
}

function asideSubLink ($linkname, $root, $indexfile) {
	$workingdir = end(explode('/', getcwd()));
	if ($workingdir == $linkname && !isset($_GET['post'])) {
		echo '<li class="asidesubitem greyed">'.$linkname.'</li>';
	} else {
		echo '<li class="asidesubitem"><a href="'.$root.$linkname.'/'.$indexfile.'">'.$linkname.'</a></li>';
	}
}

echo '<div class="asidehomeimage centre"><a href="'.$root.'home.php"><img src="'.$root.'images/'.$heads[$usehead].'" alt="Home" /></a></div>';
echo '<span class="asidehometext"><a href="'.$root.'home.php">Home</a></span>';
echo '<ul class="blogbox">';
	echo '<li class="coloureditalic centre">Blogs</li>';
	asideSubLink('General', $root, $indexfile);
	asideSubLink('Media', $root, $indexfile);
	asideSubLink('News', $root, $indexfile);
	asideSubLink('Privacy', $root, $indexfile);
	asideSubLink('Projects', $root, $indexfile);
	asideSubLink('Scripting', $root, $indexfile);
	asideSubLink('Software', $root, $indexfile);
echo '</ul>';
echo '<ul>';
	asideLink('About', 'about.php', $root);
	asideLink('Contact', 'contact.php', $root);
	asideLink('Other', 'other.php', $root);
	echo '<li class="asideitem"><a href="'.$returnlink.'">Return</a></li>';
echo '</ul>';
echo '<div class="centre">';
	echo '<a href="/rss.xml" target="_blank"><img class="asidebottomimage" src="'.$root.'images/rss.gif" alt="RSS" /></a>';
	echo '<a href="http://iwakura.rf.gd/404.php" target="_blank"><img class="asidebottomimage" src="'.$root.'images/git.gif" alt="Git Server" /></a>';
	echo '<a href="http://iwakura.rf.gd/404.php'.$_SERVER['REQUEST_URI'].'" target="_blank"><img class="asidebottomimage" src="'.$root.'images/tor.gif" alt="Browse Site on Tor" /></a>';
echo '</div>';
?>
