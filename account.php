<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
<link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
<script type = "text/javaScript" src = "myScript.js">  </script>
<script type = "text/javascript"  src = "account.js"> </script>
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
  <?php
    
    

    if(isset ($_POST['SubmitLogin']))
    {
      $userName = $_POST['Username'];
      $passWord = $_POST['Password'];

      $filename = "Login.txt";
      if(file_exists($filename))
      {
        $handle = fopen($filename, "r");
        $list = file("Login.txt");
        $size = sizeof($list);

          $write = true;
          for($int = 0; $int < $size; $int++)
          {
            $subArray = explode(":", $list[$int]);
            $dbName = $subArray[0];

            if($userName == $dbName)
            {
              include('formCreate.php');
              echo "<h3>The Username has already been used! Please enter another Username!</h3>";
              $write = false;
              break;
            } 
          }
          if($write)
            {
              $fptr = fopen("Login.txt", "a");
              $userName = $_POST['Username'];
              $passWord = $_POST['Password'];
              $info = $userName.":".$passWord."\r\n";
              fwrite($fptr, $info);
              echo "<h3>Welcome home, </h3>"."<h3>$userName</h3>";
            }
      }
      else // empty file, just write!
      {
        $fptr = fopen("Login.txt", "a");
        $userName = $_POST['Username'];
        $passWord = $_POST['Password'];
        $info = $userName.":".$passWord."\r\n";
        fwrite($fptr, $info);
        echo "<h3>Welcome home, </h3>"."<h3>$userName</h3>";
      }
    }  
    else 
    {
      echo "<h3>Create a new account!</h3>";
      include('formCreate.php');

      
    }
    

  ?>
</div> 
  
<div class="footer">
   <?php
    include('Footer.php');
   ?>
</div>

      
 </body>
</html>