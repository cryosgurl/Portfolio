<?php include 'inc/header.php'; ?>

<div class="site-wrap">
  <div class="navigation">
    <ul>
      <li><a href="#default">Home</a></li>
      <li><a href="#about-me">About</a></li>
      <li><a href="#my-skills">Skills</a></li>
      <li><a href="#contact-id">Contact</a></li>
    </ul>
  </div>
  <div class="home" id="default" >
    <h1>Mandy van Zetten</h1>
    <h3>Frontend Developer</h3>
    <img src="img/CryosLogowhite.png" alt="Mandy">
  </div>

  <div class="about" id="about-me">
    <h2>About Me</h2>
    <p>I'm a enthousiastic coder</p>
    </div>

  <div class="skills" id="my-skills">
    <h2>Skills</h2>
    <div class="content-container">
      <div class="progress-bar">
        <h4>HTML5</h4>
        <div class="progress-bar-container">
          <div class="progress-bar-value value-90"></div>
        </div>
      </div>
      <div class="progress-bar">
        <h4>CSS3</h4>
        <div class="progress-bar-container">
          <div class="progress-bar-value value-80"></div>
        </div>
      </div>
      <div class="progress-bar">
        <h4>JavaScript</h4>
        <div class="progress-bar-container">
          <div class="progress-bar-value value-60"></div>
        </div>
      </div>
      <div class="progress-bar">
        <h4>PHP</h4>
        <div class="progress-bar-container">
          <div class="progress-bar-value value-30"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact" id="contact-id">
    <h2>Contact</h2>
    <div class="contact-container">
      <form name="contactform" method="post" action="">

          <label class="form-label" for="input-mail">Mail: </label>
          <input type="text" class="form-input" id="input-mail" name="email" maxlength="80" size="30" placeholder="ex: john@doe.com">


          <textarea id="input-message" class="form-textarea" placeholder="Message" name="comments"></textarea>
          <button type="submit" class="form-submit">Send message</button>

      </form>
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
      ?>
        Email is send!
      <?php
      }
      ?>

    </div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>
