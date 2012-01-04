<?php // Script 9.7 - logout.php 
// This is the logout page.  It destroys the session information.  

// Need the session: 
session_start();

// Delete the session variable: 
unset($_SESSION);

// Destroy the session variable: 
session_destroy();

// Define a title page and include the header: 
define('TITLE', 'Logout');
require('templates/header.html');

?>

<h1>See you around!</h1>
<p>You are now logged out.</p>

<?php require('templates/footer.html'); ?>
