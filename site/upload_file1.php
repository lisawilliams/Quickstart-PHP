<?php
$page_title = "Bitches Love Uploading Files";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>

<?php // Script 11.4, upload_file.php

// This script displays and handles an HTML form. 
// It takes a file upload and stores it on the server. 

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

if(isset($_POST['submitted']))
	{ 
		// Handle the form. 
		if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "../uploads/{$_FILES['the_file']['name']}")) {
	
				print '<p>Your file has been uploaded.</p>';
				
			}	else	{
			
				// There's a problem. 
				print 	'<p style="color:red;">Your file could not be uploaded because:';
				// Print a message based on the error: 
				switch($_FILES['thefile']['error'])
			{
				case 1:
					print 'The file excedes the upload_max_filesize setting in php.ini';
					break;		
				case 2:
					print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';
					break;
				case 3: 
					print 'The file was only partially uploaded.';
					break;
				case 4:
					print 'No file was uploaded.';
					break;
				case 6:
					print 'The temporary folder does not exist.';
					break;
				default:
					print 'Something unforseen happened.';
					break;
			}
			
// Complete the paragraph. 			
print '.</p>'; 				

	} // end of move_uploaded_file() IF. 
}  // end of submission IF. 

// Leave PHP to display the form: 

?>	
						
<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
	<p><input type="file" name="the_file" /></p>
	<p><input type="submit" name="submit" value="Upload This File" /></p>
</form>

</body>
</html>