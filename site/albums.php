

<?php // Script 8.5 - albums.php
/*This page lists Elliot Smith's discography.*/

//Set the page title and include the header file: 
define('TITLE', 'Records by Elliot Smith');
require('templates/header.html');

// error handling
ini_set('display errors',1);  // Let me learn from my mistakes!
error_reporting(E_ALL|E_STRICT); // Show all possible problems! 

// Leave the PHP section to display lots of HTML: 
?>

<h1>Elliot Smith's Albums</h1>
<p>
<ul>
	<li>Roman Candle</li>
	<li>Elliot SMith</li>
	<li>Either/Or </li>
	<li>XO</li>
	<li>Figure 8 </li>
	<li>From a Basement on the Hill </li>
	<li>New Moon </li>
</ul>
</p>

<?php // Return to PHP and include the footer: 
require('templates/footer.html');
?>








?>

</body>
</html>