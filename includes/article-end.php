<?php 
			$workdir=getcwd();
			if (strpos($workdir, '/Other') !== false) {
				$curfile=explode('/', $_SERVER['REQUEST_URI'])[2];
				echo '<b>'.date('Y.m.d H:i', filemtime($workdir.'/'.$curfile)).' GMT</b>';
			} else {
				echo '<b>'.date('Y.m.d H:i', filemtime($workdir.'/'.$_GET['post'])).' GMT</b>';
			}
		echo '</div>';
require $root."includes/end.php"; 
?>
