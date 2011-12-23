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

// Count and print the current number of elements

$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// Add two items to the array

$soups['Saturday']='Lobster Bisque';
$soups['Sunday']="Tomato";

$count2 = count($soups);
print "<p>After adding 2 more soups, the array now has $count2 elements.</p>";

// Try to print the array 
// 
// print"<p>$soups</p>";

// Print the contents of the array

print_r($soups);

?>

<p></p>

<?php

// Use var dump() and see what happens

var_dump($soups);

?>

</body>
</html>