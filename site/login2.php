<?php // Script 8.8 - login2.php  A second try at this exercise which I was too tired to do last night.

// This page lets users login to the site...in theory.  

// Set the title page and include the header file: 

define('TITLE', 'Login');
require('templates/header.html');

// Print some introductory text 

print '<h1>Login Form</h1>
<p> Users who are logged in are just better than users who aren\'t.</p>';

// Check if the form has been submitted 

if (isset($_POST['submitted']))
		
{
	//Handle the form
	if((!empty($_POST['email'])) && (!empty($_POST['password'])) ) 
					
	{
	if((strtolower($_POST['email']) == 'me@example.com')&&($_POST['password'] == 'testpass'))
						
		{  // redirect user to welcome page 
			ob_end_clean(); // DESTROY ALL BUFFERS!!  Okay, just this one. 
			header('Location:index.php');
			exit();
						
		}	else	{  // Forgot a field 
						
			print '<p>The submitted email address or password are incorrect.</p>';
		}	
						
	} 
						
} else  {
							
	  print '<form action ="login.php" method ="post">
	  <p>Email Address:<input type="text" name="email" size="20"></p>
	  <p>Password:<input type="text" name="password" size="20"></p>
	  <p><input type="submit" name="submit" value="Log In"></p>
	  <input type="hidden" name="submitted" value="true" />
	  </form>';
} 
					
require('templates/footer.html'); // Need the footer. 		
?>
						
								