<?php
$page_title = "Y U NO LIKE SOUP?!";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

?>

<H1>MMMMM SOUPS</H1> 

<?php  // Script 7.1 soups1.php
// This script creates and prints out an array 

// Create the array

$soups = array (
'Monday' => 'White Chicken Chili',
'Tuesday' => 'Tortilla Soup',
'Wednesday' => 'Chicken Noodle',
'Thursday' => 'Beef Stew',
'Friday' => 'Clam Chowder' 
);

// Try to print the array 

print"<p>$soups</p>";

// Print the contents of the array

print_r($soups);

?>

</body>
</html>