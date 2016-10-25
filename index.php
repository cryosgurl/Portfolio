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
      <form action="">
            <div class="form-group-container">
              <label class="form-label" for="input-name">Name: </label>
              <input type="text" class="form-input" id="input-name" placeholder="ex: John Doe">
            </div>
            <div class="form-group-container">
              <label class="form-label" for="input-mail">Mail: </label>
              <input type="text" class="form-input" id="input-mail" placeholder="ex: john@doe.com">
            </div>
            <div class="form-group-container">
              <label class="form-label" for="input-subject">Subject: </label>
              <input type="text" class="form-input" id="input-subject" placeholder="ex: Project X">
            </div>
            <div class="form-group-container">
              <textarea id="input-message" class="form-textarea" placeholder="Message"></textarea>
              <button class="form-submit">Send message</button>
            </div>
          </form>
    </div>
  </div>
</div>

<?php include 'inc/footer.php'; ?>
