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

<?php // Script 7.9 handle_event.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Print an introductory text: 
print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br />";

// Print each weekday 
if (isset($_POST['weekdays']) AND is_array($_POST['weekdays']))
	{
		foreach($_POST['weekdays'] as $day)
			{
				print "$day<br /> \n";
			}	
	
		} else {
		
			print 'Please select at least one weekday for this event!';
	}	
	
// Complete the paragraph: 

print '</p>';
	

?>

</body>
</html>