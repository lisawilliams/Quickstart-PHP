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
<?php  // Script 7.5 - sort.php
// This script creates, sorts, and prints out an array 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Create the array
$grades = array(
'Richard'=> 95,
'Sherwood'=> 82,
'Toni' => 98,
'Franz' => 87,
'Melissa' => 75,
'Roddy' => 85
);

// Print the original array: 
print '<p>Original array looks like this:<br />';

foreach ($grades as $student => $grade)
	{
		print "$student: $grade <br />\n";
	}	

print '<p>';

// Sort by value in reverse order and then print again 

arsort($grades);
print '<p> after sorting the array by value using arsort(), the array looks like this:<br />';

foreach ($grades as $student => $grade)
	{
		print "$student: $grade<br />\n";
	}	
print '</p>';

// Sort by key, then print again. 

ksort($grades);
print '<p> After sorting the array using ksort(), it looks like this:<br />';

foreach ($grades as $student => $grade)
	{
		print "$student: $grade<br />\n";
	}	
print "</p>"
		
		

		

?>

</body>
</html>