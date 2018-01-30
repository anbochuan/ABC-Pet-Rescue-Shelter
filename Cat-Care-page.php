<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
<link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
<script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Cat Care page </title>
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
    <h2> Cat Basic Care </h2>
   <h3> Here are some articles about basic cat care to help you prepare and for when you’ve just adopted a cat or kitten! </h3>
   
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/bringing-home-your-new-cat-or-kitten/" > Bringing Home Your New Cat or Kitten </a><br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/your-new-cat-or-kittens-first-day/" > Your New Cat or Kitten’s First Day </a> <br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/litter-box-training-saves-lives/" > Litter Box Training Saves Lives</a> <br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/why-water-is-so-important-for-cats/" > Why Water is So Important for Cats</a><br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/how-to-trim-your-cats-nails/" > How to trim your cat’s nails</a> <br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/how-to-pill-your-cat-or-kitten/" >How to pill your cat or kitten</a> <br/><br/>
      <a class = "Catcare" href = "http://www.adoptapet.com/blog/fun-cat-games-to-keep-your-kitty-happy/" > Fun Cat Games to Keep Your Kitty Active </a> <br/><br/>
      <p> Looking for more helpful articles about cats? We’ve got sections on Cat Behavior and Training, Cat Health, Cat Safety, and everything else in Cat Tips! You can find them under the “Pet Care and Health” menu at the top of your screen.</p>
</div>

<div class="footer">
    <?php
    include('Footer.php');
    ?>
</div>

      
 </body>
</html>