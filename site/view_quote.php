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

// Note for the above:  rand() is taking two arguments here -- the element in the array 
// you want it to start with -- in this case, the first element, [0].  The second
// argument is the element you want the function to stop at, in this case the last 
// element in the array.  We figured that out by using the count() function on 
// $data, which is the array variable we put the entire file of quotes.txt in. 
// count($data) finds out how many elements are in the array.  In this case, 
// each element is a line in the file ended by a newline character (\n). 
// The text of each line is a quote.  
// rand() then chooses a random quote in the array, 
// and the print statement below prints it on the screen when the user loads this file
// in their browser.  

// Print the quotation: 
print '<p>'.trim($data[$rand]).'<p>';

?>

</body>
</html>