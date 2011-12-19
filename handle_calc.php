<?php
$page_title = "Product Cost Calculator";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php print($page_title) ?></title>
	<style type="text/css" media="screen">
	.number {font-weight: bold;} 
	</style>
</head>
<body>
<?php // Script 4.2 - handle_calc.php 
/*This script takes values from calculator.html and performs
 * total cost and monthly payment calculations. */
 
 // error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Get the values from the $_POST array:
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// Calculate the total

$total = $price * $quantity;
$total = $total + $shipping;
$total = $total - $discount;

// Determine the tax;rate 

$taxrate = $tax/100;
$taxrate = $taxrate + 1;

// Factor in the tax rate:

$total = $total * $taxrate;

// Calculate the monthly payments: 

$monthly = $total/$payments;

// Print out the results:  

print "<div>You have selected to purchase:<br />
<span class= \"number\">$quantity</span>widget(s) at <br />
<span class= \"number\">$price</span> price each plus a <br />
<span class= \"number\">$shipping</span> shipping cost and <br />
<span class= \"number\">$tax</span> percent tax rate. <br />
After your $<span class \"number\">$discount</span> discount, the total cost is
$<span class \"number\">$total</span>
Divided over <span class \"number\">$payments</span> monthly payments, that would be 
<span class \"number\">$monthly</span> each.</p></div>"

?>


</body>
</html>