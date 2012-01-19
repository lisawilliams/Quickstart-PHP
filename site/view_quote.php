<?php
$page_title = "View a Quotation";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 11.3 view_quote.php

// This script displays and handles an HTML form, 
// reads a file and prints a random line from it. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Read the file's contents into an array: 
$data = file('quotes.txt');

// Count the number of items in the array: 
$n = count($data);

// Pick a random item:
$rand = rand(0,($n -1));

// Print the quotation: 
print '<p>'.trim($data[$rand]).'<p>';

?>

</body>
</html>