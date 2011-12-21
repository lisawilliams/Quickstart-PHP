<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php  // Script 6.1 -- register.html 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! ?>

<p>Please complete this form to register:</p>

<form action="handle_reg.php" method="post">

<p>Email Address: <input type="text" name="email" size="30" /></p>

<p>Password: <input type="text" name="password" size="20" /></p>

<p>Confirm Password: <input type="text" name="confirm" size="20" /></p>

<?php 
include_once("includes/month.inc.php");
?>



</body>
</html>