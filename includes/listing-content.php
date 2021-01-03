<?php
	$stype = 3;
	$displayarticles = 6;
	$page = $_GET['page'];
	if (!isset($page)) {
		$page = 1;
	}
	
	$incstart = $displayarticles * ($page - 1);
	$incend = ($displayarticles * $page) - 1;
	$inc = $incstart;
        $totalpages = ceil(sizeof($includearr) / $displayarticles);

        function numberLinks ($page, $totalpages, $incbanner) {
                $curfile = $_SERVER['PHP_SELF'];
                echo '<div class="centre">';
		if ($totalpages > 1) {
                        echo '<div class="section numlist">';
                                echo '<span class="homesubmessage"><b>';
                                        if ($page != 1) {
                                                $prev = $page - 1;
                                                echo '<a href="'.$curfile.'?page='.$prev.'">Previous</a> < ';
						#echo '<a href="'.$curfile.'">First</a> < ';
                                        }
                                        $firstdotflag = 0;
                                        $lastdotflag = 0;
                                        for ($i = 1; $i <= $totalpages; $i++) {
                                                if ($page - $i < 4 && $page - $i > -4 || $i == 1 || $i == $totalpages) {
                                                        if ($page == $i) {
                                                                echo '<span class="greyed">'.$i.'</span> ';
                                                        } else {
                                                                echo '<a href="'.$curfile.'?page='.$i.'">'.$i.'</a> ';
                                                        }
                                                } elseif ($page - $i >= 4 && $firstdotflag == 0) {
                                                        echo ".. ";
                                                        $firstdotflag = 1;
                                                } elseif ($page - $i <= -4 && $lastdotflag == 0) {
                                                        echo ".. ";
                                                        $lastdotflag = 1;
                                                }
                                        }
                                        if ($page != $totalpages) {
                                                $next = $page + 1;
                                                echo '> <a href="'.$curfile.'?page='.$next.'">Next</a>';
						#echo '> <a href="'.$curfile.'?page='.$totalpages.'">Last</a>';
                                        }
                                echo '</b></span>';
                        echo '</div>';
		}
		if ($incbanner == '1') {
			echo '<a href="/Other/lainchanwebring.php"><img src="/images/banner.gif" class="banner" alt="Banner" /></a>';
		}
                echo '</div>';
        }

	require $root."includes/archive.php";

	if (!isset($includearr)) {
		echo '<div class="section nothinghere">';
			echo 'Looks like there\'s nothing here yet. <br /><span class="notgood">That\'s probably not good.</span>';
			echo '<br /><span class="nothingreturn"><a href="../'.$indexfile.'">Return</a></span>';
		echo '</div>';
	} elseif ($_GET['post'] == 'archive') {
		archive($includearr);
	} else {
		$incbanner = 0;
        	numberLinks($page,$totalpages, $incbanner);

		while ($inc <= $incend && $inc < sizeof($includearr)) {
			include $root."includes/section-start.php";
			include $includearr[$inc][0];
			include $root."includes/section-end.php";
			if ($stype == 3) {
				$stype = 1;
			} else {
				$stype = $stype + 1;
			}
			$inc++;
		}
		archiveLink();
		$incbanner = 1;
        	numberLinks($page,$totalpages, $incbanner);
		echo '<span class="scrollingcontentbtm"></span>';
	}
?>
