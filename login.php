<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Music library</title>
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
    <a href="index.php" class="logo">Home</a>
    <nav>
      <ul>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>
  </header>

  <div class="hero-section">
    <form method="POST" action="">
      <div class="sign-in-form">
        <?php
        if(isset($_GET['uspesno'])){
          echo "<p>Uspesno ste se registrovali!</p>";
        }

        if (isset($_POST['user']) && isset($_POST['pass'])) {

          $response = User::login($_POST['user'], $_POST['pass'], $conn);

          if ($response) {
            if ($_SESSION['isadmin'] == 1) {
              header("Location: adminpanel.php");
              die();
            } else {
              header("Location: music.php");
              die();
            }
          }else{
            echo "<p>Pogresna username/password kombinacija</p>";
          }
        }
        ?>
        <h4 class="text-center">Sign In</h4>
        <label for="username">Username</label>
        <input type="text" name="user" class="field" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="pass" class="field" id="password" required>
        <button type="submit" class="sign-in-form-button">Sign In</button>
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