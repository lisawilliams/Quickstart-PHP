<?php
$page_title = "Variables";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
</head>
<body>
<?php // Script 2.3 - variables.php 

// An address: 
$street = "20 Oak Street";
$city = "Watertown";
$state = "MA";
$zip = "02472";

// Print the address 
print"<p>The address is:<br />$street<br />$city $state $zip</p>";

?>
</body>
</html>