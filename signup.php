<!-- Header -->
<?php
include_once('header.php');
?>
<!-- Sign Up Section -->
<section id="form-section">
  <div class="text-container">
    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum cupiditate explicabo voluptate dignissimos unde at ullam. Officiis, hic exercitationem adipisci nisi ut nihil, voluptas quibusdam tempore quidem commodi, architecto at.</h3>
  </div>
  <div class="form-container">
    <div class="title">Sign Up</div>
    <div class="sub-title">
      <h4>Already have an account?</h4>
      <a href="login.php">Login</a>
    </div>

    <form action="includes/signup.inc.php" method="post">

      <div class="input-box">
        <input type="text" name="uid" placeholder="Username...">
        <span class="icon"><i class="fa-solid fa-user"></i></span>
      </div>

      <div class="input-box">
        <input type="text" name="email" placeholder="Email...">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>

      </div>

      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password...">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      </div>

      <div class="input-box">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      </div>

      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p class='alert'>Please fill in all fields!</p>";
        } else if ($_GET["error"] == "invaliduid") {
          echo "<p class='alert'>Please choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
          echo "<p class='alert'>Please choose a proper email!</p>";
        } else if ($_GET["error"] == "passwordsdontmatch") {
          echo "<p class='alert'>Passwords don't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
          echo "<p class='alert'>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
          echo "<p class='alert'>Username alreay taken!</p>";
        } else if ($_GET["error"] == "none") {
          echo "<p class='success'>You have signed up!</p>";
        }
      }
      ?>

      <p>By signing up you agree to our <span><a href="terms.php">Terms & Conditions</a></span> and <span><a href="privacy.php">Privacy Policy</a></span></p>

      <button type="submit" name="submit" class="btn">Sign Up</button>

    </form>
  </div>


</section>

<!-- Footer -->
<?php
include_once('footer.php');
?>