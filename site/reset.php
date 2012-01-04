<?php // Script 9.4 - reset.php

// Delete dem cookies:
setcookie('font_size', '', time() -600, '/' ,'', 0);
setcookie('font_color', '', time() -600, '/', '', 0);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<p>Your settings have been reset! Click <a href="view_settings.php">here</a> to
go back to the main page or <a href ="customize.php">here</A> to try out different
settings.</p>

<?php 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

?>

</body>
</html>