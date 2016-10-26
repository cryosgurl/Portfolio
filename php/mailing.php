<?php
  if(isset($_POST['email'])) {
    
    $email_to = "mandy@competa.com";
    $email_subject = "Website Email";

    function died($error) {
        echo $error;
        die();
    }

    if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) === true) {
        died('enter a valid email');
    }

    $email_from = $_POST['email'];
    $comments = $_POST['comments'];
    $error_message = "";

    if(strlen($comments) < 2) {
      $error_message = 'The message you send does not contain an actual message!';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    echo "Email is send!";
  }
?>
