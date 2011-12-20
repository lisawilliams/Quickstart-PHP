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
<?php  // Script 5.2 - handle_post.php 
/* This script receives five values from posting.html: 
first_name, last_name, email, posting, submit */

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Get the values from the $_POST array: 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = $_POST['posting'];

// Create a full-name variable: 
$name = $first_name . ' '.$last_name;

// Print a message: 
print "<div>Thank you, $name, for your posting: 
<p>$posting</p></div>";

?>
</body>
</html>