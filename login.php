<!DOCTYPE html>
<!-- greet.html A trivial document -->
<?php
session_start();
?>
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
    if(isset($_POST['SubmitPetInfo']))
    {
      
      $fptr = fopen("AvailablePetInformation.txt", "a");
      $list = file("AvailablePetInformation.txt");
      $counter = count($list);
      $CorD = $_POST['Catordog'];
      $breed = $_POST['breed'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $color = $_POST['color'];
      $along = $_POST['getalongwith'];
      $owner = $_SESSION['CurrentUser'];
      $str = ($counter+1).":".$owner.":".$CorD.":".$breed .":".$age.":".$gender.":".$color .":".$along."\r\n";
      

      fwrite($fptr, $str);
      
      fclose($fptr);
    }

  ?>


  <?php
  
  if(isset ($_GET['logout']))
  {
    session_unset();
    session_destroy();
    echo "<h3>You need to login first!</h3>";
    include('formLogin.php');
  }
    else if(isset($_SESSION['CurrentUser']))
    {

      echo "<h3>Welcome back,</h3>"."<h3>" .$_SESSION['CurrentUser'] ."</h3>";
      include('petGiveForm.php');
    }
      else if(isset ($_POST['SubmitLogin']))
      {
        $userName = $_POST['Username'];
        $passWord = $_POST['Password']."\r\n";

        $filename = "Login.txt";
        $handle = fopen($filename, "r");
        $list = file("Login.txt");
        $size = sizeof($list);

        $write = true;
        for($int = 0; $int < $size; $int++)
        { 
          $subArray = explode(":", $list[$int]);
          $dbName = $subArray[0];
          $dbPass = $subArray[1];

          if($userName == $dbName)  
          {
            if($passWord == $dbPass)
            {
              $_SESSION['CurrentUser'] = $userName;
              echo "<h3>Welcome back, ".$userName ."</h3>";

              include('petGiveForm.php');
              $write = false;
              break;
            }
            else
            {
              echo "<h3>Wrong Password! Please try again!</h3>";
              include('formLogin.php');
              $write = false;
              break;
            }
            $write = false;
          }

        }
          if($write)
          {
            echo "<h3>Username do not match! Please try again!</h3>";
            include('formLogin.php');
          
          }
        }
      
    else
    {
      echo "<h3>You need to Login first!</h3>";
      include('formLogin.php');
    }
    
  ?>
    <h3><a href = "login.php?logout=true"> <h3>Click here to Logout</h3></a></h3>
  </div>
<div class="footer">
   <?php
    include('Footer.php');
   ?>
</div>

      
 </body>
</html>