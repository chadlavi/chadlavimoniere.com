<?php
$config = parse_ini_file(realpath('/root/email.ini'));

$email = $name = $message = '';

if (isset($_REQUEST['submitted'])) {
    include 'verify.php';
    $errors = array();
   
    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
        $pattern = '/.+@.+\..+/';
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
        $pattern = '/[a-zA-Z0-9\ ]{2,20}/';
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
            echo '<p>' . $msg . '</p>';
        }
        echo '</div>';
    } else {
        echo '<div class="success"><h3>Message Sent!</h3><p>Thanks for getting in touch!</p></div>'; 
        $from = "From: '" . $name . "' <" . $config['from'] . ">\r\nReply-to: " . $email . "";
        $to = $config['to']; 
        $subject = 'contact from ' . $name . '';
        $body = $message;
        mail($to,$subject,$body,$from);
        return;
    }
}

echo '<form id="comtact" action="" method="post">
    <input class="field" name="email" autofocus required type="email" placeholder="jane@doe.com" value="' . $email . '"/>
    <label for="email">email address</label>
    <input required class="field" name="name" type="text" placeholder="Jane Doe" value="' . $name . '"/>
    <label for="name">name</label>
    <textarea required class="field" name="message" placeholder="Hi there!" rows="5" cols="30"/>' . $message . '</textarea>
    <label for="message">message</label>
    <div class="g-recaptcha" data-theme="dark" data-sitekey="6LdxZSMUAAAAAKoaHPjNw_87O5zF1i71XKZyW94S"></div>
    <button class="submit" name="submitted" type="submit" value="Submit" />Send</button>
    </form>';

?>
