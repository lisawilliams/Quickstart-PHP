<?php
$page_title = "I gave that bitch a quote.  Bitches love quotes.";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script number 11.1, addquotes4.php

// This script displays and handles an HTML form. 
// This script takes text input and stores it in a text file. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Check for a form submission: 
if(isset($_POST['submitted']))

	{ 
		// Handle the form. 
		if(!empty($_POST['quote'])&&($_POST['quote']!='Enter your quotation here.'))
		
		{
			// Need something to write. 
			if($fp = fopen('quotes2.txt', 'a+b'))
		
			
			{
				// Try to open the file. 
				// Set the encoding. 
				//stream_encoding($fp, 'utf-8');
				
				// Lock the file: 
				flock($fp, LOCK_EX);
				
				// Write the data.
				fwrite($fp, "{$_POST['quote']}\n"); 
				
				// Unlock the file for writing by another user. 
				flock($fp, LOCK_UN);
				
				// Close the file. 
				fclose($fp);
				
				// Print a message: 
				print "<p>Your quotation has been saved.</p>";
				
			}	else	{
			
				// Could not open file. 
				print '<p style="color:red;">Please enter a quotation!</p>';
			}
			
		
		}
	}  // End of submitted IF. 
	
// Leave PHP and display the form. 
?>

<form action ="addquotes4.php" method="post">
<textarea name ="quote" rows="5" cols ="30">Enter your quotation here.</textarea>
<input type="submit" name="submit" value="Add This Quote!" />
<input type="hidden" name="submitted" value="true" />
</form>

<a href ="view_quote2.php">Go see your quotes!</a>

</body>
</html>

				
			