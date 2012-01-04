<?php // Script 9.6 - welcome.php #2

// This is the welcome page. The user is redirected here after they successfully log in. 

// Need the session: 
session_start();

// Set the page title and include the header file: 
define('TITLE', 'Welcome to the Elliot Smith Fan Club');
require('templates/header.html');

// Print a greeting 
print '<h1>GREETINGS PEOPLE OF EARTH! And '.$_SESSION['email']. '.!</h1>';

// Print how long they've been logged in: 
date_default_timezone_set('America/New_York');
print '<p>You have been logged in since: '.date('g:i a', $_SESSION['loggedin']). '</p>';

// Make a logout link:  
print '<p><a href ="logout.php">Click here to logout</a></p>';

// Get the footer: 
require('templates/footer.html');

?>