<?php
    $config = parse_ini_file(realpath('/root/email.ini'));
    $email;$comment;$captcha;
    if(isset($_POST['email']))
      $email=$_POST['email'];
    if(isset($_POST['comment']))
      $comment=$_POST['comment'];
    if(isset($_POST['g-recaptcha-response']))
      $captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
        echo '<div class="error"><h3>Whoops!</h3><p><a href="/contact">Try again</a>.</p></div>'; 
      exit;
    } else {
      $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$config['recaptcha_secret']."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
      if($response['success'] == false) {
        echo '<div class="error"><h3>Whoops!</h3><p><a href="/contact">Try again</a>.</p></div>'; 
      };
    };
?>
