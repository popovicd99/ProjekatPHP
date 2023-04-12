<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link
      rel="stylesheet"
      href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"
    />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>

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
        <form>
            <div class="sign-in-form">
                <h4 class="text-center">Sign In</h4>
                <label for="username">Username</label>
                <input type="text" name="user" class="field" id="username">
                <label for="password">Password</label>
                <input type="password" name="pass" class="field" id="password">
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