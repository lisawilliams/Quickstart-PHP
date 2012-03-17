<?php
$page_title = "Testing Regular Expressions Patterns";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 13.1 , test_pattern.php

// This script takes a submitted string and checks it against a submitted pattern.

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Set the variables to blank values: 
$string = '';
$pattern = '';

if(isset($_POST['submitted']))

{

// Assign values from the form: 
$pattern = trim($_POST['pattern']);
$string = $_POST['string'];


// Print the results: 
print "<p>The result of checking<br />
<span style=\"font-style:italic;\">$string</span><br />
against<br />
<span style=\"font-weight:bold;\">$pattern</span><br />
is";

if(eregi($pattern, $string))
	{
		print 'TRUE!</p>';
		
	}	else	{
	
		print 'FALSE!</p>';
	}
}
// Display the HTML form: 
	
?>
	

<form action="test_pattern.php" method="post">
<p>Regular expression pattern:<input type="text" name="pattern" value="<?php print $pattern ?>" size ="30" /></p>	
<p>Test pattern:<input type="text" name="string" value="<?php print $string;?>" size="30" /></p>
<input type="submit" name="submit" value="Test!" />
<input type="hidden" name="submitted" value="true" />
</form>
</body>
</html>

