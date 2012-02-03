<?php
$page_title = "Login";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 11.7, login3.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// This script logs a user in by checking the stored values in a text file.

// Identify the file to use: 

$file = '../users/users.txt'; 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		// Handle the form. 
		
		// Not currently logged in: 
		$loggedin = FALSE;
		
		// Enable auto_detect_line_endings: 
		ini_set('auto_detect_line_endings', 1);
		
		// Open the file: 
		$fp = fopen($file, 'rb');
		
		// Loop through the file: 
		while ($line = fgetcsv($fp, 200, "\t"))
			{
				if ( ($line[0] == $_POST['username']) AND ($line[1] == md5(trim($_POST['password']))) )
					{
						$loggedin = TRUE; //Correct pwd & usr combination 
						
						// Stop looping through the file 
						break;
						
					} // End of IF. 
					
			}  // End of WHILE. 
		
		// Close the file. 
		fclose($fp); 
		
		// Print a message: 
		if ($loggedin)
			{
				print '<p>You are now logged in.</p>';
				
			}	else	{
				
				print '<p> style="color:red;">The username and password you entered do not match those on file.</p>';
			}
			
		} 	else	{
			
			// Leave PHP and display the form: 
	?>		
			
<form action ="login.php" method ="post">			
<p>Username:<input type="text" name="username" size="20" /></p>
<p>Password:<input type="password" name="password" size="20" /><p>
<input type="submit" name="submit" value="Login" />
<input type="hidden" name="submitted" value="true" />
</form>
<?php } // End of submission IF ?>
					

</body>
</html>