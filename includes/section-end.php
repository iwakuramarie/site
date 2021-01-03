<?php
echo '<span class="seemore">';
	echo '<b><span class="seedate">'.date('Y.m.d H:i', $includearr[$inc][1]).' GMT</span></b>';
	if (strpos($usragent, 'Lynx') === false && strpos($usragent, 'w3m') === false && strpos($usragent, 'Links') === false && strpos($usragent, 'textmode') === false) {
		echo '<a class="seemorelink" href="'.$seemorepath.'">Article Page</a>';
	}
echo '</span>';
echo '</div>';
$seemorepath = "#";
?>
