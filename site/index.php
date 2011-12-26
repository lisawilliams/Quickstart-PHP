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

<?php // Script 8.4 - index. php 
// This is the home page for this site.  It uses templates to create the layout.

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// include the header: 

require('templates/header.html');

//Leave the PHP section to display lots of HTML 

?>

<h1>Welcome to the Elliott Smith Fan Club!</h1>

<p>Organic sustainable lomo, +1 irony McSweeney's skateboard Portland PBR tattooed farm-to-table Terry Richardson Williamsburg. Organic farm-to-table wolf, next level shit put a bird on it freegan American Apparel Williamsburg chambray gentrify viral you probably haven't heard of them keffiyeh Cosby sweater. Pitchfork photo booth fuck, DIY cardigan messenger bag butcher Thundercats tofu you probably haven't heard of them whatever squid VHS put a bird on it. Thundercats fixie Williamsburg, photo booth synth vinyl dreamcatcher Wes Anderson cliche. You probably haven't heard of them DIY mlkshk biodiesel McSweeney's raw denim. Skateboard Pitchfork Etsy, photo booth messenger bag artisan raw denim beard Tumblr retro Austin. Wes Anderson sustainable keffiyeh, blog lomo craft beer cliche brunch homo skateboard biodiesel fanny pack Pitchfork you probably haven't heard of them Stumptown.</p>

<p>Organic sustainable lomo, +1 irony McSweeney's skateboard Portland PBR tattooed farm-to-table Terry Richardson Williamsburg. Organic farm-to-table wolf, next level shit put a bird on it freegan American Apparel Williamsburg chambray gentrify viral you probably haven't heard of them keffiyeh Cosby sweater. Pitchfork photo booth fuck, DIY cardigan messenger bag butcher Thundercats tofu you probably haven't heard of them whatever squid VHS put a bird on it. Thundercats fixie Williamsburg, photo booth synth vinyl dreamcatcher Wes Anderson cliche. You probably haven't heard of them DIY mlkshk biodiesel McSweeney's raw denim. Skateboard Pitchfork Etsy, photo booth messenger bag artisan raw denim beard Tumblr retro Austin. Wes Anderson sustainable keffiyeh, blog lomo craft beer cliche brunch homo skateboard biodiesel fanny pack Pitchfork you probably haven't heard of them Stumptown.</p>

<p>Organic sustainable lomo, +1 irony McSweeney's skateboard Portland PBR tattooed farm-to-table Terry Richardson Williamsburg. Organic farm-to-table wolf, next level shit put a bird on it freegan American Apparel Williamsburg chambray gentrify viral you probably haven't heard of them keffiyeh Cosby sweater. Pitchfork photo booth fuck, DIY cardigan messenger bag butcher Thundercats tofu you probably haven't heard of them whatever squid VHS put a bird on it. Thundercats fixie Williamsburg, photo booth synth vinyl dreamcatcher Wes Anderson cliche. You probably haven't heard of them DIY mlkshk biodiesel McSweeney's raw denim. Skateboard Pitchfork Etsy, photo booth messenger bag artisan raw denim beard Tumblr retro Austin. Wes Anderson sustainable keffiyeh, blog lomo craft beer cliche brunch homo skateboard biodiesel fanny pack Pitchfork you probably haven't heard of them Stumptown.</p>


<?php // Return to PHP. 

require('templates/footer.html'); // Include the footer 

?>

</body>
</html>