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
<!-- Script 5.1 - posting.html -->
<div><p>Please complete this form to submit your posting:</p>
<form action="handle_post.php" method="post">
<p>First name: <input type="text" name="first_name" size="20" /></p>
<p>Last name: <input type ="text" name="last_name" size="20" /></p>
<p>Email address: <input type="text" name="email" size="30" /></p>
<p>Posting:<textarea name="posting" rows="9" cols="30"></textarea></p>

<input type="submit" name="submit" value="Send My Posting" />

</form>
</div>

</body>
</html>