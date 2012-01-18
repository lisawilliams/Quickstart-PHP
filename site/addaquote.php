<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add A Quotation</title>
</head>
<body>

<?php // Script 11.1  addaquote.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// This script displays and handles an HTML form.  
// the script takes input and stores it in a text file.  

// Check for a form submission:  
if(isset($_POST['submitted'])) { // Handle form 
		if(!empty($_POST['quote'])&&($_POST['quote']!='Enter your quotation here.')) { // Need something to write. 
			if($fp = fopen('quotes.txt', 'ab')) { // Try to open the file 
				  // Set the encoding
				  stream_encoding($fp, 'utf-8');
				  fwrite($fp, "{$_POST['quote']}\n"); // write the data. 
				  fclose($fp); // Close the file. 
				  // Print a message:
				  print "<p>Your quotation has been stored.</p>";
				  
				  } else { // Could not open file. 
				  
				  print '<p style="color:red;">Your quote could not be 
				  stored due to a system error.</p>';
				  
				  }
				  
				  }	else { // Failed to enter a quotation. 
				  
				print '<p style="color:red;">Please enter a quotation!</p>';
				
				}
				
		}
			// End of submitted IF. 
			
			// Leave PHP and display the form: 
			
			?>
			
<form action ="addaquote.php" method "post">
<textarea name="quote" rows="5" cols="30">Enter your quotation here.</textarea>
<input type="submit" name="submit" value="Add this quote!" />
<input type="hidden" name="submitted" value="true" />
</form>


</body>
</html>