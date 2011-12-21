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

if (empty($_POST['password'])) 
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
	
if (empty($okay))
	{
		print '<p> <a href ="register.php">Go back to registration page</a>';
	}

// If there were no errors, print a success message: 

if($okay) 
	{
	print '<p>You have been successfully registered (but not really).</p>';
	}
	

?>

</body>
</html>