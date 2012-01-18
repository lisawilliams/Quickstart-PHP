
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 10.1 - menus1.php
//I'm putting a few new comments in here to demonstrate how GitHub for Mac handles
// changes to code you write. 

// This script defines and calls a function. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// This function makes three pull-down menus for the months, days, and years.
function make_date_menus($start_year, $num_years = 10)
	{
		// Array to store the months: 
		$months = array(1=>'January', 'February', 'March', 'April', 'May', 'June',
						'July', 'August', 'September', 'October', 'November', 
						'December');
						
		// Make the month pull-down menu: 
		print'<select name="month">';
			foreach($months as $key =>$value)
				{
					print"\n<option value=\"$key\">$value</option>";
				}
		print '</select>';		
		
		// Make the day pull-down menu: 
		print '<select name="day">';
			for($day = 1; $day <= 31; $day++)
				{
					print"\n<option value=\"$day\">$day</option>";
				}	
		print '</select>';			
	
		
		// Make the year pull-down menu: 
		print'<select name="year">';
			for($y = $start_year; $y<=($start_year + $num_years); $y++)
				{
					print"\n<option value=\"$y\">$y</option>";
				}		
												
		print '</select>';
		
	} // End of make_date_menus() function 
	
	// Make the form: 
	
	print '<form action="" method="post">';
	make_date_menus(2009);
	print '</form>';
	
	?>

</body>
</html>