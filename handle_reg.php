<?php
$page_title = "Registration";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<style type="text/css" media="screen">
	.error {color:red;}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 6.2 handle_reg.php

/* This script receives eight values from register.html: email, password, confirm, day, year, color, submit */

// error handling

ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Flag variable to track success: 

$okay = TRUE; 

// Validate the email address 

if (empty($_POST['email'])) 
	{
		print '<p class="error">Please enter your email address.</p>';
		$okay = FALSE;
	}	
	
// Validate the password: 

if (empty($_POST['password']))
	{	
		print '<p class="error">Please enter your password.</p>';
		$okay = FALSE;
	}	

// Check the two passwords for equality 

if ($_POST['password'] != $_POST['confirm'])

	{
		print '<p class="error">Your passwords do not match.</p>';
		$okay = FALSE;
	}	



// Validate the birthday: 

$birthday = '';

// Validate the month: 

if(is_numeric($_POST['month'])) 
	{
		$birthday = $_POST['month'].'-';
		
			} else {
		print '<p class="error">Please select the month you were born</p>';
		$okay = FALSE;
	}		
	
// Validate the day: 

if(is_numeric($_POST['day'])) 
	{
		$birthday.= $_POST['day'].'-';
		
			} else {
			
		print '<p class="error">Please select the day you were born</p>';
		$okay = FALSE;
	}	
	

if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) 

	// then check that they were born before 2011
	{
	
		if ($_POST['year'] >= 2011)
	
			{
				print '<p class="error">Did you invent time travel?  Because it looks like you come from the future!</p>';	
				$okay = FALSE;
			
		} else {
		
		$birthday .=$_POST['year'];
		
			}

		} else {
		
		print '<p class="error">Please enter the year you were born as four digits.</p>';
		$okay = FALSE;
		
	}
	
//OLD COLOR VALIDATION CODE using else and elseif 
// Validate the color: 

// if ($_POST['color']=='red')
// 	{
// 		print '<p style="color:red;">Red is your favorite color!</p>';
// 	}		
// 	
// elseif($_POST['color']=='yellow')
// 	{
// 		print'<p style="color:yellow;">Yellow is your favorite color!</p>';
// 	} 
// 	
// elseif($_POST['color']=='green')
// 	{
// 		print'<p style="color:green;">Green is your favorite color!</p>';
// 	}					
// 	
// elseif($_POST['color']=='blue')
// 	{
// 		print'<p style="color:blue;">Blue is your favorite color!</p>';
// 	
// 	}	else	{ // Problem!
// 	print '<p class ="error">Please select your favorite color.</p>';
// 	
// if (empty($okay))
// 	{
// 		print '<p> <a href ="register.php">Go back to registration page</a>';
// 	}
// 	$okay = FALSE;
// 	}

// NEW COLOR VALIDATION CODE USING SWITCH/BREAK 
// Validate the color:

switch($_POST['color'])
	{
		case 'red':
		print '<p style="color:red">Red is your favorite color!</p>';
		break;
		
		case 'yellow':
		print '<p style="color:yellow">Yellow is your favorite color!</p>';
		break;
		
		case 'green':
		print '<p style="color:green">Green is your favorite color!</p>';
		break;
		
		case 'blue':
		print '<p style="color:blue">Blue is your favorite color!</p>';
		break;
		
		default:
		print '<p class="error">Please select your favorite color.</p>';
		
		$okay = FALSE;
		break;
	} // End of switch	
	
// If there were no errors, print a success message: 

if($okay) 
	{
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You entered your birthday as $birthday.</p>";
	}

	

?>

</body>
</html>