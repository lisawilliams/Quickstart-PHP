<?php
$page_title = "Upload a File";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 11.4 -- upload_file2.php

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

//  This script displays and handles an HTML form. 
// This script takes a file upload and stores it on the server. 

if(isset($_POST['submitted']))

	{ 
		// Handle the form. 
		if(move_uploaded_file($_FILES['thefile']['tmp_name'], "../uploads/{$_FILES['thefile']['name']}"))
		
		{
			print '<p>Your file has been uploaded.</p>';
		}	else	{
			
			// Problem!
			
			print '<p style="color:red;">Your file could not be uploaded because:';
			
			// Print a message based on the error: 
			
			switch($_FILES['thefile']['error']) 
			
			{
			
			case1: 
				print 'The file exceeds the upload_max_filesize setting in php.ini';
				break;
			case2: 
				print 'The file exceed the MAX_FILE_SIZE setting in the HTML form.';
				break;
			case3: 
				print 'The file was only partially uploaded.'
				break;
			case4:	
				print 'No file was uploaded';
				break;	
			case6:
				print 'The temporary folder does not exist.';
				break;
			default:
				print 'Something unforseen happened.';
				break;
			}
			
		// Complete the paragraph.	
		print '</p>';
		}  // End of move_uploaded_file IF. 
		
	}  // End of submission IF. 	

// Leave PHP and display the HTML form:  
?>

<form action ="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	<p><input type ="file" name="thefile" /></p>
	<p><input type="submit" name="submit" value="Upload This File" /></p>
	
	<input type="submit" name="submit" value="Upload" />
	<input type="hidden" name="submitted" value="true" />
	
</form>		
				

</body>
</html>