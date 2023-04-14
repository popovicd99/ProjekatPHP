<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foundation | Welcome</title>
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/login.css" />
</head>

<?php
include_once "db/dbbroker.php";
include_once "model/user.php";
?>

<body>

  <header>
    <a href="index.html" class="logo">Home</a>
    <nav>
      <ul>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </nav>
  </header>

  <div class="hero-section">
    <form method="POST">
      <?php
        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['ruser']) && isset($_POST['rpass'])) {

          $response = User::register($_POST['firstname'], $_POST['lastname'],$_POST['ruser'],$_POST['rpass'], $conn);
        
          if ($response) {
            header("Location: login.php?uspesno");
          }

        }
      ?>
      <div class="sign-in-form">
        <h4 class="text-center">Register</h4>
        <label for="fname">Firstname</label>
        <input type="text" name="firstname" class="field" id="fname" required>

        <label for="lname">Lastname</label>
        <input type="text" name="lastname" class="field" id="lname" required>

        <label for="username">username</label>
        <input type="text" name="ruser" class="field" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="rpass" class="field" id="password" required>

        <button type="submit" class="sign-in-form-button">Register</button>
      </div>
    </form>
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