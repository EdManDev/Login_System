<?php 
  include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav>
      <div class="main-wrapper">
        <ul>
          <li><a href="index.php">home</a></li>
        </ul>
        <div class="nav-login">
          <form action="POST">
            <input type="text" name="uid" placeholder="/e-mail">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">login</button>
          </form>
          <a href="signup.php">Sign up</a>
        </div>
      </div>
    </nav>
  </header>
  <section>
  </section>
</body>

</html>
<h2>home here</h2> <?php 
  include_once 'footer.php';
?>