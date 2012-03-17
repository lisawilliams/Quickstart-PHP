<?php
$page_title = "Make URL clickable";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php // Script 13.2 - convert_url.php
/* This script turns a valid URL into an HTML link. */

if ( isset($_POST['submitted'])) { // Has the form been submitted?

	// Trim off extraneous spaces, just in case:
	$url = trim($_POST['url']);
	
	// Establish the patterns:
	$pattern1 = '^((http|https|ftp)://){1}([[:alnum:]-])+(\.)([[:alnum:]-]){2,6}([[:alnum:]/+=%&_.~?-]*)$';
	$pattern2 = '^([[:alnum:]-])+(\.)([[:alnum:]-]){2,6}([[:alnum:]/+=%&_.~?-]*)$';
	
	// Test the submitted value against the patterns....
	if (eregi($pattern1, $url)) { // Check for an existing http/https/ftp.
	
		$url = eregi_replace($pattern1, '<a href="\\0">\\0</a>', $url);
		print "<p>Here is the URL: $url<br />The code is now: " . htmlentities ($url) . '</p>';	
		
	} elseif (eregi($pattern2, $url)) { // No http/https/ftp, add http://.
	
		$url = eregi_replace($pattern2, '<a href="http://\\0">\\0</a>', $url);
		print "<p>Here is the URL: $url<br />The code is now: " . htmlentities ($url) . '</p>';	
		
	} else { // Invalid URL.
		print'<p>Please enter a valid URL.</p>';
	}
		
} // End of main conditional.
// Display the HTML form:
?>
<form action="convert_url.php" method="post">
	<p>URL: <input type="text" name="url" size="30" /></p>
	<input type="submit" name="submit" value="Convert" />
	<input type="hidden" name="submitted" value="true" />
</form>
</body>
</html>