<?php // Script 8.9 register.php

// This page lets people register for the site...in theory. 

// Set the page title and include the header file: 
define('TITLE', 'Register'); 
require('templates/header.html');

// Print some introductory text: 
print '<h1>Registration Fooooooorm</h1>
<p>Register so that you make take advantage of the <strike>many</strike> 
advantages of membership!</p>';

// Add the CSS 
print '<style type="text/css" media="screen">
	.error{color:red};
	</style>';
	
// Check if the form has been submitted: 
if(isset($_POST['submitted']))
	{
		$problem = FALSE; // No problems, Cap'n. 
		
		// Check for each value... 
		if(empty($_POST['first_name']))
			{
				$problem = TRUE;
				print '<p class="error">Please enter your first name.</p>';
			}	
		if(empty($_POST['last_name']))
			{
				$problem = TRUE;
				print '<p class ="error">Y U NO TYPE LAST NAME?!</p>';
			}	
		if(empty($_POST['password1']))
			{
				$problem = TRUE;
				print '<p class = "error">Hey, you need a password.</p>';
			}				
		if($_POST['password1']!=$_POST['password2'])
			{
				$problem = TRUE;
				print '<p class ="error">Your passwords don\'t match.</p>';
			}
		if(!$problem) // If there were no problems...
			{
				// Print a message: 
				print '<p>You are now registered.</p>';
				
		// Clear posted values after successful reg. 	
		$_POST = array();
	}
		
		}	else	{  // Forgot a field
		
				print '<p class ="error">Please try again.</p>';
	}
	
// Create the form: 
?>
<form action="register.php" method="post">
<p>First Name: <input type="text" name="first_name" size = "20" value="<?php if (isset($_POST['first_name'])){print htmlspecialchars($_POST['first_name']);}?>"/></p>
<p>Last Name: <input type="text" name="last_name" size = "20" value="<?php if (isset($_POST['last_name'])){print htmlspecialchars($_POST['last_name']);}?>"/></p>
<p>Email: <input type="text" name="email" size = "20" value="<?php if (isset($_POST['email'])){print htmlspecialchars($_POST['email']);}?>"/></p>				
<p>Password: <input type="password" name="password1" size="20" /></p>
<p>Confirm Password: <input type="password" name="password2" size ="20" /></p>
<p><input type="submit" name="submit" value="Register" /></p>
<input type="hidden" name="submitted" value="true" />
</form>

<?php 
require('templates/footer.html');  // Need the footer. 
?>		
							