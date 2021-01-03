<?php

echo '<div class="section search centre">';
	echo '<form method="GET" action="'.$file.'?post=archive">';
		foreach ($_GET as $name => $value) {
			if ($name == 'search') {
				continue;
			}
			$name = htmlspecialchars($name);
			$value = htmlspecialchars($value);
			echo '<input type="hidden" name="'.$name.'" value="'.$value.'" />';
		}
		echo 'Search: <input name="search" />';
		echo '<input type="submit" value=">" />';
		if (isset($_GET['search'])) {
			$searching = str_replace(" ", "', '", trim($_GET['search']));
			echo '<br /><br />Searching for \''.$searching.'\'.';
			echo '<br /><a href="'.$file.'?post=archive">Clear Search</a>';
		}
	echo '</form>';
echo '</div>';
?>
