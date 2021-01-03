<?php
	if (!$_GET['post']) {
		$length = sizeof(get_included_files());
		$prefix = explode("/includes", dirname(__FILE__))[0];
		$seemorepath = explode($prefix, get_included_files()[$length - 1])[1];
		$patharr = explode('/', $seemorepath);
		$patharr[sizeof($patharr) - 1] = $indexfile . '?post=' . $patharr[sizeof($patharr) - 1];
		$finalpath = implode('/', $patharr);
		$seemorepath = $finalpath;
	}
?>
