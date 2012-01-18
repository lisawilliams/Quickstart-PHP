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

<?php // Playing around with functions

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

function greeting($who = 'world')
	{
		print "Hello, $who!".'<br />';
		
	}
	
greeting();
greeting('Mr. Linderman');
	
function calculate_total($qty, $price, $tax)
	{
		$total = (($price * $tax) + $price) * $qty;
		print "The total is: $total";
	}		
	

calculate_total(6, 11, 0.05);

function make_full_name($first, $last)
	{
		$fullname = $first.' '.$last;
		//return $fullname;
	}
	
make_full_name(Lisa, Williams);

print "$fullname.";		



?>

</body>
</html>