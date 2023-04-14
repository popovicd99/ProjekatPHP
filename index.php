<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music library</title>
    <link
      rel="stylesheet"
      href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"
    />
    <link rel="stylesheet" href="css/index.css" />
  </head>

  <body>
    <header>
      <a href="index.php" class="logo">Home</a>
      <nav>
        <ul>
          <?php

            if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]==1){
              echo "<li><a href='adminpanel.php'>Menu</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }

            if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]==0){
              echo "<li><a href='music.php'>Music</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }

            if(!isset($_SESSION["id"])){
              echo "<li><a href='login.php'>Login</a></li>";
              echo "<li><a href='register.php'>Register</a></li>";
            }
        
          ?>
        </ul>
      </nav>
    </header>

    <div class="hero-section">
      <div class="hero-section-text">
        <h1>Music library</h1>
        <h5>Samo dobra muzika!</h5>
      </div>
    </div>

    <div class="sticky-footer-css">
      <div class="columns shrink footer text-center">
        <p>©Danilo Popovic.All rights reserved</p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
