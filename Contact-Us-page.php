<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
<link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
<script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Contact Us page </title>
 <meta charset = "utf-8" />
 </head>
<body onload = "myTimer()">
 <div class="header">
    <?php
    include('Header.php');
    ?> 
</div>

<div class="side">
    <ul>
      <li> <a class = "active" href = "Home-Page.php" > Home page </a> </li>
      <li> <a class = "other" href = "Browse-Available-Pets-page.php" > Browse Available Pets </a> </li>
      <li> <a class = "other" href = "Find-a-dog-or-cat-page.php" > Find a dog/cat </a> </li>
      <li> <a class = "other" href = "Dog-Care-page.php" > Dog Care </a> </li>
      <li> <a class = "other" href = "Cat-Care-page.php" > Cat Care </a> </li>
      <li> <a class = "other" href = "account.php" > Create an account </a> </li>
      <li> <a class = "other" href = "login.php" > Have a pet to give away </a> </li>
      <li> <a class = "other" href = "Contact-Us-page.php" > Contact Us </a> </li>
    </ul>
</div>

<div class="content">
    <h3> Name: Bochuan An</h3>
    <h3> ID: 27878745</h3>
    <h3> Email: anbochuan@hotmail.com</h3>
</div>
<div class="footer">
    <?php
    include('Footer.php');
    ?>
</div>

      
 </body>
</html>