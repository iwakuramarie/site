<?php
	if ($_GET['post'] != 'archive') {
                if (!preg_match('/page/', $_SERVER['QUERY_STRING']) || $_SERVER['QUERY_STRING'] == 'page=1') {
		        $message = "Marie's Blog";
			$submessages = array("Welcome to my Magical Realm.",
					"Presently not Experiencing an Outage!",
					"Banished to /dev/null.",
                    "The Internet is Some Serious Business.",
                    "Are you done yet?",
                    "What's really in /dev/null anyway?",
                    "skip doo dalidoo skap bobbity bop",
                    "Solves all your problems, baby.",
                    "License? What license? I've never heard of a license! Free software is just a myth!",
                    "Stupid.",
                    "Let's Dance!",
                    "What do you want from me?",
                    "You can own everything you see, if you're powerful enough.",
                    "What are you, stupid?",
					"WHY IS ALREADY NIGHTTIME",
					"Don't ye little kids know what spooky tales reside on this net?",
					"The only winning move is to not play.");
	        
		        $motd = array_rand($submessages);
			echo '<div class="section homesection centre">';
				echo '<a href="'.$root.'home.php">'; 
					echo '<img class="homelargeimg" src="'.$root.'images/front.gif" alt="Welcome Image - Large" />';
					echo '<img class="homesmallimg" src="'.$root.'images/frontsmall.gif" alt="Welcome Image - Small" />';
					echo '<span class="homemessage">'.$message.'</span>';
				echo '</a>';
				echo '<br />';
				echo '<span class="homesubmessage">'.$submessages[$motd].'</span>';
			echo '</div>';
                }
	} else {
		$file = basename($_SERVER['PHP_SELF']);
		echo '<div class="section archivereturn centre">';
			echo '<a href="home.php">';
				echo '<span class="homemessage">Return Home</span>';
			echo '</a>';
		echo '</div>';
		include $root.'includes/archivesearchbar.php';
	}
?>
