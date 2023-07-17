<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
  <title>Vertex</title>
</head>

<body>
  <div id="overlay"></div>
  <div id="mobile-menu" class="mobile-main-menu">
    <ul>
      <li class="mobile-only"><a href="texture.php">Textures</a></li>
      <li class="mobile-only"><a href="model.php">Models</a></li>
      <li class="mobile-only"><a href="hdri.php">Hdris</a></li>
      <li class="mobile-only"><a href="blog.php">Blog</a></li>
      <li class="mobile-only"><a href="gallery.php">Gallery</a></li>

      <?php
      if (isset($_SESSION["userid"])) {
      ?>
        <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
        <li><a href="includes/logout.inc.php">Log Out</a></li>
      <?php
      } else {
      ?>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="login.php">Log In</a></li>
      <?php
      }
      ?>
      <li class="mobile-only"><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></i></a></li>
    </ul>
  </div>
  <!-- Navbar Section-->
  <header class="main-header">
    <!-- Logo -->
    <div class="logo">
      <a href="index.php">
        <img src="assets/logo.png" alt="">
      </a>
    </div>
    <!-- Navbar -->
    <nav class="desktop-main-menu">
      <ul>
        <li><a href="texture.php">Textures</a></li>
        <li><a href="model.php">Models</a></li>
        <li><a href="hdri.php">Hdris</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="gallery.php">Gallery</a></li>
      </ul>
    </nav>

    <nav class="desktop-main-menu">
      <ul>
        <?php
        if (isset($_SESSION["userid"])) {
        ?>
          <li><a href="profile.php"><?php echo $_SESSION["useruid"]; ?></a></li>
          <li><a href="includes/logout.inc.php">Log Out</a></li>
        <?php
        } else {
        ?>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="login.php">Log In</a></li>
        <?php
        }
        ?>


        <li><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></i></a></li>
      </ul>
    </nav>

  </header>

  <!-- Hamburger Menu -->
  <button id="menu-btn" class="hamburger" type="button">
    <span class="hamburger-top"></span>
    <span class="hamburger-middle"></span>
    <span class="hamburger-bottom"></span>
  </button>