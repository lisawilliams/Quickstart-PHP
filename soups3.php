<?php
$page_title = "EAT ALL THE SOUPS!";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php // Script 7.3 soups3.php

// This script creates and prints out an array. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 
?>

<h1>MMMMMM SOUPS</h1>

<?php 

// Create the array: 
$soups=array(
	'Monday' => 'Chili',
	'Tuesday' => 'Vegetable Soup',
	'Wednesday' => 'Chicken Noodle',
	'Thursday' => 'Tomato',
	'Friday' => 'Clam Chowder',
	'Saturday' => 'Bean and Escarole'
	);

// Print each key and value: 
foreach ($soups as $day => $soup) 
	{
		print"<p>$day: $soup</p>\n";
	}
			

?>

</body>
</html>