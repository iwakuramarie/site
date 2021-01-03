<?php
	if ($_GET['post'] != 'archive'){
		echo '<div class="section homesection centre">';
			echo '<a href="'.$indexfile.'">';
				echo '<span class="homemessage">'.$message.'</span>';
			echo '</a>';
			echo '<br />';
			echo '<span class="homesubmessage">'.$submessage.'</span>';
		echo '</div>';
	} else {
		$file = basename($_SERVER['PHP_SELF']);	
		echo '<div class="section archivereturn centre">';
			echo '<a href="'.$indexfile.'">'; 
				echo '<span class="homemessage">Return to '.$message.'</span>';
			echo '</a>';
		echo '</div>';
		include $root.'includes/archivesearchbar.php';
	}
?>
