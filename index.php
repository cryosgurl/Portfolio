
<ul class="navigation">
    <li class="nav-item"><a href="#home">Home</a></li>
    <li class="nav-item"><a href="#about">About</a></li>
    <li class="nav-item"><a href="#skills">Skills</a></li>
    <li class="nav-item"><a href="#contact">Contact</a></li>
</ul>

<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>

<div class="site-wrap">
  <div class="home" id="home" >
    <h1>Mandy van Zetten</h1>
    <h3>Frontend Developer</h3>
    <img src="img/CryosLogowhite.png" alt="Mandy">
  </div>

  <div class="about" id="about">
    <h2>About Me</h2>
    <p>This concept relies on thepseudo-selector as well as the general siblingelector, so it has decent browser support.</p>
    <p>IE9+, Firefox 3.5+, Chrome any, Safari 3.2+, Opera 9.5+</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi vero nisi eos sed qui natus, ut eius reprehenderit error nesciunt veniam aliquam nulla itaque labore obcaecati molestiae eveniet, perferendis provident amet perspiciatis expedita accusantium! Eveniet, quos voluptas et, labore natus, saepe unde est nulla sit eaque tempore debitis accusantium. Recusandae.</p>
    <p>Dolorem aliquam a libero reiciendis obcaecati doloribus ipsa eos laudantium, dicta in! Odit iure ut ratione, dolorum cupiditate perferendis voluptatum sapiente, dignissimos sunt necessitatibus, reprehenderit consequatur dolorem. Aliquam veniam quaerat, pariatur deserunt reiciendis vero vitae, repellat omnis sequi dolor nesciunt. Nihil similique alias impedit, obcaecati eligendi delectus voluptatum! Ipsum, vel.</p>
    <p>Sint, perspiciatis nemo aut, rerum excepturi deleniti modi quos nihil corporis eum, maiores soluta labore, consectetur eligendi nesciunt. Placeat, incidunt! Illum placeat eligendi, veritatis consectetur eum! Dolor obcaecati minima ab placeat voluptatem neque modi doloribus, magnam qui voluptate eaque in. Nulla expedita hic porro architecto facere officiis vitae numquam, dolor!</p>
    <p>Perferendis quis ea incidunt ducimus nisi voluptate natus. Repellat asperiores quod rerum rem quos blanditiis enim modi, veniam voluptas a facilis! Velit cum omnis, voluptatum eum inventore! Corrupti, suscipit, neque distinctio expedita est laboriosam cum aliquid minus tempora quaerat officia possimus unde vel deleniti eaque fugit accusamus iusto dolorum natus.</p>
  </div>

  <div class="skills" id="skills">
    <h2>Skills</h2>
    <div class="contentContainer">
      <div class="progressBar">
        <h4>HTML5</h4>
        <div class="progressBarContainer">
          <div class="progressBarValue value-90"></div>
        </div>
      </div>
      <div class="progressBar">
        <h4>CSS3</h4>
        <div class="progressBarContainer">
          <div class="progressBarValue value-80"></div>
        </div>
      </div>
      <div class="progressBar">
        <h4>JavaScript</h4>
        <div class="progressBarContainer">
          <div class="progressBarValue value-60"></div>
        </div>
      </div>
      <div class="progressBar">
        <h4>PHP</h4>
        <div class="progressBarContainer">
          <div class="progressBarValue value-30"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact" id="contact">
    <h2>Contact</h2>
    <div class="contactContainer">

      <form action="mailto:mandy@competa.com" method="post" enctype="text/plain">
        <div>
          <span>Name:<span>
            <input type="text" name="name">
          </div>
          <div>
            <span>E-mail:<span>
              <input type="text" name="subject">
            </div>
            <div>
              <span>Subject:<span>
                <input type="text" name="mail">
              </div>
              <div>
                <span>Comment:<span>
                  <textarea name="comment" maxlength="1000" cols="25" rows="6"></textarea>
                </div>
                <div>
                  <input type="submit" value="Send">
                </div>
              </form>
            </div>
    </div>

</div>

<?php include 'inc/header.php'; ?>
<?php include 'inc/footer.php'; ?>
