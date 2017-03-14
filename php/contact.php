<?php
$config = parse_ini_file(realpath('/root/email.ini'));
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_REQUEST['name'])) {
  $name = $_REQUEST['name'];
  $pattern = "/[a-zA-Z0-9\ ]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
  else{ $errors[] = 'Your Name can only contain spaces, numbers, and letters.';}
  } else {$errors[] = 'You forgot to enter your First Name.';}
  
  //Check for a valid email
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/.+@.+/";
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Your email is invalid';}
  } else {$errors[] = 'You forgot to enter your email.';}
  
  if (!empty($_REQUEST['message'])) {
  $message = $_REQUEST['message'];
  if (empty($message)){$checked = 'Unchecked';}else{$checked = 'Checked';}
  } else {$errors[] = 'You forgot to enter your message.';}
  }
  //End of validation 

 //Print Errors
  if (isset($_REQUEST['submitted'])) {
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
   else{echo '<hr /><h3 align="center">Your message was sent. Thanks for getting in touch!</h3><hr />'; 
  }
  }

if (isset($_REQUEST['submitted'])) {
  if (empty($errors)) { 
  $from = "From: " . $name . " <". $email .">";
  $to = $config['to']; 
  $subject = "contact from " . $name . "";
  $body = $message;
  mail($to,$subject,$body,$from);
  }
}

echo ' <p>Fill out the form below.</p>
  <form action="" method="post">
  <label>email address: <br />
  <input name="email" autofocus required type="email" placeholder="your email address" /><br /></label>
  <label>name: <br />
  <input name="name" type="text" placeholder="your name" /><br /></label>
  <label>message: <br/> 
  <textarea name="message" placeholder="your message" rows="5" cols="30"/></textarea><br /></label>
  <input name="" type="reset" value="Reset Form" /><input name="submitted" type="submit" value="Submit" />
  </form>';

?>
