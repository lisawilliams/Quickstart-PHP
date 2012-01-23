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

<?php // Script 11.5, list_dir.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// This script lists the directories and files in a directory. 

// Set the time zone.  
date_default_timezone_set('America/New_York');

// Set the directory name and scan it: 

$search_dir = '.';
$contents = scandir($search_dir);

// List the directories first...
// Print a caption and start a list: 

print '<h2>Directories</h2> <ul>';
foreach ($contents as $item) 
	{
		if((is_dir($item)) AND (substr($item, 0, 1)!='.'))
			{
				print "<li>$item</li>";
			}	
	}
	
// close the bulleted list with a </ul> tag. 	
print '</ul>';	

// Create a table header: 

print '<hr /><h2>Files</h2>
<table cellpadding="2" cellspacing ="2" align="left">
<tr>
<td>Name</td>
<td>Size</td>
<td>Last Modified</td>
<tr>';

// List the files: 
foreach($contents as $item){
		if((is_file($item)) AND (substr($item, 0, 1)!='.'))
		{
			// Get the file size:
			$fs = filesize($item);
			
			// Get the file's modification date: 
			$lm = date('Fj, Y', filemtime($item));
			
			// Print the information: 
			print "<tr>
			<td>$item</td>
			<td>$fs bytes</td>
			<td>$lm</td>
			</tr>\n";
			}
		}	
		
print '</table>' ;		
						
?>

</body>
</html>