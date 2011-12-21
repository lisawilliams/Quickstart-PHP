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
<?php  // reusable month picker include file  month.inc.php 
// I'll probably make it a month/date thing at some point  

// error handling

ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 


// Test string.  This will print on the page if the include statement is actually working.
// I comment it out after I test it to see if the script is calling the include file.

//print("This is actually doing something");

// Month picker 
echo '<p>';
echo 'Date of birth:';
echo '<select name="month">';
echo '<option value="1">January</option>';
echo '<option value="2">February</option>';
echo '<option value="3">March</option>';
echo '<option value="4">April</option>';
echo '<option value="5">May</option>';
echo '<option value="6">June</option>';
echo '<option value="7">July</option>';
echo '<option value="8">August</option>';
echo '<option value="9">September</option>';
echo '<option value="10">October</option>';
echo '<option value="11">November</option>';
echo '<option value ="12">December</option>';
echo '</select>';

// Day picker

echo '<select name="day">';
echo '<option value="">Day</option>';
echo '<option value="1">1</option>' ;
echo '<option value="2">2</option>' ;
echo '<option value="3">3</option>';
echo '<option value="4">4</option>';
echo '<option value="5">5</option>';
echo '<option value="6">6</option>';
echo '<option value="7">7</option>';
echo '<option value="8">8</option>';
echo '<option value="9">9</option>';
echo '<option value="10">10</option>';
echo '<option value="11">11</option>';
echo '<option value="12">12</option>';
echo '<option value="13">13</option>';
echo '<option value="14">14</option>';
echo '<option value="15">15</option>';
echo '<option value="16">16</option>';
echo '<option value="17">17</option>';
echo '<option value="18">18</option>';
echo '<option value="19">19</option>';
echo '<option value="20">20</option>';
echo '<option value="21">21</option>';
echo '<option value="22">22</option>';
echo '<option value="23">23</option>';
echo '<option value="24">24</option>';
echo '<option value="25">25</option>';
echo '<option value="26">26</option>';
echo '<option value="27">27</option>';
echo '<option value="28">28</option>';
echo '<option value="29">29</option>';
echo '<option value="30">30</option>';
echo '<option value="31">31</option>';
echo '</select>';


// Year input 

echo ' Year: <input type= "text" name="year" value="YYYY" size="4" /></p>';

 
// I am awesome.  I just made my first include file of my own creation -- not typing from a tutorial! 

?>

</body>
</html>