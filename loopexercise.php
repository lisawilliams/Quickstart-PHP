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

<?php // PHP exercise from PHP Exercises.com http://phpexercises.com/php-if-else-statement-exercise.html

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

$month =  date('F', time());

if ($month == 'August')
		{
			print "It's $month, so it\'s pretty hot."; 
			
		}	else	{	
		
			print "It's $month so it's not too bad.";
		}	








?>

</body>
</html>