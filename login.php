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
    <div class="title">Log In</div>
    <div class="sub-title">
      <h4>Don't have an account?</h4>
      <a href="signup.php">Sign Up</a>
    </div>

    <form action="includes/login.inc.php" method="post">

      <div class="input-box">
        <input type="text" name="uid" placeholder="User name or Email...">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>

      </div>
      <div class="input-box">
        <input type="password" name="pwd" placeholder="Password...">
        <span class="icon"><i class="fa-solid fa-lock"></i></span>
      </div>
      <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p class='alert'>Please fill in all fields!</p>";
        } else if ($_GET["error"] == "wronglogin") {
          echo "<p class='alert'>Incorrect login!</p>";
        }
      }
      ?>

      <button type="submit" name="submit" class="btn">Login</button>

    </form>

  </div>


</section>

<!-- Footer -->
<?php
include_once('footer.php');
?>