<?php
$config = parse_ini_file(realpath('/root/email.ini'));

if (isset($_REQUEST['submitted'])) {
    $errors = array();
   
    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
        $pattern = "/.+@.+\..+/";
        if (preg_match($pattern,$email)){ 
            $email = $_REQUEST['email'];
        } else { 
            $errors[] = 'The address "' . $email . '" is invalid';
        }
    } else {
        $errors[] = 'You forgot to enter your email.';
    }

    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
        $pattern = "/[a-zA-Z0-9\ ]{2,20}/";
        if (preg_match($pattern,$name)){ 
            $name = $_REQUEST['name'];
        } else { 
            $errors[] = 'Your name can only contain spaces, numbers, and letters.';
        }
    } else {
        $errors[] = 'You forgot to enter your name.';
    }
    
    if (!empty($_REQUEST['message'])) {
        $message = $_REQUEST['message'];
    } else {
        $errors[] = 'You forgot to enter your message.';
    }

    if (!empty($errors)) { 
        echo '<div class="error"><h3>Whoops! Try that again.</h3>'; 
        foreach ($errors as $msg) { 
            echo '<p>'. $msg . '</p>';
        }
        echo '</div>';
    } else {
        echo '<div class="success"><h3>Message Sent!</h3><p>Thanks for getting in touch!</p></div>'; 
        $from = "From: '" . $name . "' <" . $email . ">\r\nReply-to: ". $email ."";
        $to = $config['to']; 
        $subject = "contact from " . $name . "";
        $body = $message;
        mail($to,$subject,$body,$from);
        return;
    }
}

echo '<form action="" method="post">
    <label>email address: <br />
    <input class="field" name="email" autofocus required type="email" placeholder="your email address" value="'.$email.'"/><br /></label>
    <label>name: <br />
    <input required class="field" name="name" type="text" placeholder="your name" value="'.$name.'"/><br /></label>
    <label>message: <br/> 
    <textarea required class="field" name="message" placeholder="your message" rows="5" cols="30"/>'.$message.'</textarea><br /></label>
    <button class="submit" name="submitted" type="submit" value="Submit" />Send</button><br>
    </form>';

?>
