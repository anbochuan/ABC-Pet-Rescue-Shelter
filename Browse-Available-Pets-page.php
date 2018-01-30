<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
  <link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
 <script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Browse Available Pets </title>
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
     <table>
    <tr>
      <td><img class = "available" src = "no1.jpg" alt = "image not found"> <br/> <input type = "button" value = "Interested" /> </td>
      <td> 
        <?php
    if(isset($_POST['adoptDog']))
    {
      $targetCorD = "dog";
      $targetBreed = $_POST['breed'];
      $targetAge = $_POST['age'];
      $targetGender = $_POST['gender'];
      $targetColor = $_POST['color'];
      $targetAlong = $_POST['getalongwith']."\r\n";


      $fptr = fopen("AvailablePetInformation.txt", "r");
      $list = file("AvailablePetInformation.txt");
      $counter = count($list);

      $Match = false;
      echo "<h2>All records of dog that match the criteria are displayed below: </h2><hr/>";

      for($int = 0; $int < $counter; $int ++)
      {
        
        $subArray = explode(":", $list[$int]);
        $owner = $subArray[1];
        $CorD = $subArray[2];
        $breed = $subArray[3];
        $age = $subArray[4];
        $gender = $subArray[5];
        $color = $subArray[6];
        $along = $subArray[7];

        if($targetBreed == "any")
        {
          if($targetAge == $age && $targetGender ==  $gender && $targetColor == $color && $targetAlong == $along)
          {
            echo "<h3>The dog's current owner is ".$owner.".<br/>" ." This is a ". $age. " year(s) old, " 
            .$color." color ".$breed. ",<br/> and the dog's gender is ".$gender. ". This dog is easy to get along with ".$along.".</h3><hr/>";


          $Match = true;
          }
        }
        else
        {
          if($targetBreed == $breed && $targetAge == $age && $targetGender ==  $gender && $targetColor == $color && $targetAlong == $along)
          {
            echo "<h3>The dog's current owner is ".$owner.".<br/>" ." This is a ". $age. " year(s) old, " 
            .$color." color ".$breed. ",<br/> and the dog's gender is ".$gender. ". This dog is easy to get along with ".$along.".</h3><hr/>";


          $Match = true;
          }
        } 
      }

      if(!$Match)
        echo "Sorry, we can not find any information that match the criteria. See you next time...";

      fclose($fptr);
    }

  ?>

  <?php
   if(isset($_POST['adoptCat']))
    {
      $targetCorD = "cat";
      $targetBreed = $_POST['breed'];
      $targetAge = $_POST['age'];
      $targetGender = $_POST['gender'];
      $targetColor = $_POST['color'];
      $targetAlong = $_POST['getalongwith']."\r\n";
      


      $fptr = fopen("AvailablePetInformation.txt", "r");
      $list = file("AvailablePetInformation.txt");
      $counter = count($list);
      $Match = false;
      echo "<h2>All records of cat that match the criteria are displayed below: </h2><hr/>";

      for($int = 0; $int < $counter; $int ++)
      {
        
        $subArray = explode(":", $list[$int]);
        $owner = $subArray[1];
        $CorD = $subArray[2];
        $breed = $subArray[3];
        $age = $subArray[4];
        $gender = $subArray[5];
        $color = $subArray[6];
        $along = $subArray[7];

        if($targetBreed == "any")
        {
          if($targetAge == $age && $targetGender ==  $gender && $targetColor == $color && $targetAlong == $along)
          {
            echo "<h3>The dog's current owner is ".$owner.".<br/>" ." This is a ". $age. " year(s) old, " 
            .$color." color ".$breed. ",<br/> and the dog's gender is ".$gender. ". This dog is easy to get along with ".$along.".</h3><hr/>";


          $Match = true;
          }
        }
        else
        {
          if($targetBreed == $breed && $targetAge == $age && $targetGender ==  $gender && $targetColor == $color && $targetAlong == $along)
          {
            echo "<h3>The cat's current owner is ".$owner.".<br/>" ." This is a ". $age. " year(s) old" 
            .$color." color ".$breed. ",<br/> and the cat's gender is ".$gender. ". This cat is easy to get along with ".$along. ".</h3><hr/>";

          $Match = true;
          }
        }  
      }
      if(!$Match)
        echo "Sorry, we can not find any information that match the criteria. See you next time...";

      
      fclose($fptr);
    }

  ?>

      </td> 
    </tr>
    <tr>
      <td><img class = "available" src = "no2.jpg" alt = "image not found"> <br/> <input type = "button" value = "Interested" /> </td>
      <td> 


      </td>
    </tr>
    <tr>
      <td><img class = "available" src = "no3.jpg" alt = "image not found"> <br/> <input type = "button" value = "Interested" /></td>
      <td> 


      </td>
    </tr>
    <tr>
      <td><img class = "available" src = "no4.jpeg" alt = "image not found"> <br/> <input type = "button" value = "Interested" /></td>
      <td> 


      </td>
    </tr>
  </table>

    
    
</div>

<div class="footer">
    <?php
    include('Footer.php');
    ?>
</div>

      
 </body>
</html>