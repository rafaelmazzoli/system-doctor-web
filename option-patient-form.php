<?php
	session_start();
	$_SESSION["submenu"] = 0;
	echo "<script language='javascript'>window.location.href='main-menu.php'</script>"
?>