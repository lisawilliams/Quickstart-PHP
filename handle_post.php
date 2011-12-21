<?php
$page_title = "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php // Script 5.5 - handle_post.php #4
/* This script receives five values from posting.html:
first_name, last_name, email, posting, submit */

// error handling
//ini_set('display errors',1);  // Let me learn from my mistakes!
//error_reporting(E_ALL); // Show all possible problems! 

// Get the values from the $_POST array:
$first_name = trim($_POST['first_name']);
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);


// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Get a word count: 

$words = str_word_count($posting);

// Print out the number of words 

print "<p>There are $words in this posting.</p>";

// Get a snippet of the posting: 

$posting = substr($posting, 0, 50);


// Print a message:

print "<div>Thank you, $name, for your posting:
<p>$posting...</p></div>";

// Make a link to another page:
$name = urlencode ($name);
$email = urlencode($_POST['email']);
print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

?>
</body>
</html>