<?php
  include_once'header.php';
?>


<div style=" color: red; marging: 20px; ">
  <h2>Sign Up</h2>

  <div style=" display: block;  width: 10px; line-height: 40px; ">
    <form action="includes/signup.inc.php" methode="POST">
      <input type="text" name="first" placeholder="Firstname">
      <input type="text" name="last" placeholder="Lastname">
      <input type="text" name="e-mail" placeholder="e-mail">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
    </form>
  </div>
  <button type="submit" name="submit">Sign Up</button>


</div>

<?php
  include_once'footer.php';
?>