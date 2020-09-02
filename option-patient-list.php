<?php
	session_start();
	$_SESSION["submenu"] = 1;
	echo "<script language='javascript'>window.location.href='main-menu.php'</script>"
?>