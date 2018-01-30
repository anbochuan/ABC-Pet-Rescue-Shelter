<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
 <link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
 <script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Dog Care page </title>
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
   <h2> Dog Basic Care </h2>
   <h3> Here are some articles about basic dog and puppy care to help you care for your dog or puppy! </h3>
   
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/top-reason-to-spay-or-neute-your-dog-or-cat/" > Top Reasons to Spay or Neuter your Dog </a><br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/puppy-basics-tips-for-a-good-start/" > Puppy Basics – tips for a good start </a> <br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/how-to-raise-a-friendly-puppy/" > How to Raise a Friendly Puppy </a> <br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/how-to-crate-train-your-puppy-or-dog/" > How to Crate Train your Puppy or Dog</a><br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/how-to-trim-your-dogs-nails/" > How to trim your dog’s nails </a> <br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/how-to-keep-a-dog-off-kitchen-counters/" > How to keep a dog off kitchen counters </a> <br/><br/>
      <a class = "Dogcare" href = "http://www.adoptapet.com/blog/how-to-give-a-dog-a-bath/" > How to give a dog a bath </a> <br/><br/>
   
</div>

<div class="footer">
    <?php
    include('Footer.php');
    ?>
</div>

      
 </body>
</html>