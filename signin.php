<?php
require_once "includes/DB_Connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- top navigation starts here -->
    <?php require "includes/navigation.php"; ?>
    <!-- top navigation ends here -->
<div class="header">
    <h1>Header</h1>
</div>
<!-- the main content section starts here -->
<div class="row">
    <div class="content">
<h3>Sign In</h3>

<form action="processes/user_proc.php" method="POST">
    <label for="username">Userame:</label><br>
    <input type="text" name="username" id="username" placeholder="Enter your username" maxlength="60" /><br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" placeholder="Enter your password" /><br><br>
   <input type="submit" name="sign_in" value="Sign In" />
    <br><br>
</form>

</div>
<div class="sidebar">
<h3>Side Bar</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
<!-- the main content section ends here -->
<div class="footer">
copyright &copy; DBIT 2023
</div>
</body>
</html>