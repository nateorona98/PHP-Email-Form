<?php

//If the form has been submitted, send email
if(isset($_POST['submit'])) {

  //Get name from form
    $name = $_REQUEST['name'];
  //Get user email
    $send_from = $_REQUEST['email'];
  //Get user message
    $message = $_REQUEST['message'];
  //Set email to send email to
    $send_to = 'nathaniel.orona98@gmail.com';
  //String for confirmation email
    $conf_message = 'Your email has been received and you will be receiving a message back shortly';
    
//Header for receiver email      
    $headers = 'From:' . $send_from;
//Header for user email
    $headers2 = 'From:' . $send_to;
//Subject string for receiver
    $receiver_subject = 'Form submission';
//Subject string for user confirmation email
    $user_subject = 'Form submitted';

//Send email to receiver
    mail($send_to, $receiver_subject, $headers, $message);
//Send confirmation email to user
    mail($send_from, $user_subject, $headers2, $conf_message);

    echo('Your message has been sent! Check your email for a confirmation message');
}
?>