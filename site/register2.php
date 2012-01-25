<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Register</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>

<?php // Script 11.6, register2.php 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// This script registers a user by storing their information in
// a text file and creating a directory for them. 

// Handle the form 

if(isset($_POST['submitted']))
	{
		$problem = FALSE;
		// Check for each value...
		if(empty($_POST['username']))
			{
				$problem = TRUE;
				print '<p class="error">Please enter a username</p>';
			}
		if(empty($_POST['password1']))
			{
				$problem = TRUE;
				print '<p class ="error">Please enter a password.</p>';
			}
		if($_POST['password1']!=$_POST['password2'])
			{
				$problem = TRUE;
				print '<p class ="error">Your passwords do not match.</p>';
			}				
	
		if (!$problem) 
			{	// Open the file: 
				if($fp = fopen('../users/users.txt', 'ab'))
					{
						// Set the encoding:
						stream_encoding($fp, 'utf-8');
						
						// Create the data to be written: 
						$dir = time().rand(0, 4596);
						$data = $_POST['username']."\t".md5(trim($_POST['password1']))."\t".$dir."\n";
						
						// Write the data and close the file: 
						fwrite($fp, $data);
						fclose($fp);
						
						// Create the directory: 
						mkdir("../users/$dir");
						
						// Print a message: 
						print '<p>You are now registered.</p>';
		}	else	{ // Couldn't write to the file. 
						print '<p class = "error">You could not be registered due to a system error.</p>';
					}
					
		}   else	{
		
						// Display the form. 
						// Leave PHP and display the form. 
	?>
	
	<form action="register.php" method="post">
	<p>Username:<input type="text" name="username" size="20" /><p>
	<p>Password:<input type="password" name="password1" size="20" /></p>
	<p>Confirm:<input type="password" name="password2" size="20" /></p><br />
	<input type="submit" name="submit" value"Register" />
	<input type="hidden" name="submitted" value ="true" />
	</form>
	
	<?php } // End of submission IF. ?>

</body>
</html>