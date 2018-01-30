<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
 <link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
 <script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Have a pet to give away page </title>
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
  <form action = "http//:www.w3cschool.com">
  <fieldset>
    <legend> If you have a pet to give away, please fill out this form below </legend>
    <p> Cat or dog
      <select name = "Cat or dog" id = "catOrDog">
        <option value = "no">  </option>
        <option value = "cat"> Cat </option>
        <option value = "dog"> Dog </option>
      </select>
    </p>
    <p> Breed of dog  or cat
      <select name = "breed" id = "breedOfDogOrCat">
        <option value = "no"> </option>
        <option value = "ForDog"> For Dog </option>
        <option value = "golden"> Golden Retriever </option>
        <option value = "pug"> Pug </option>
        <option value = "labrador"> Labrador</option>
        <option value = "chihuahua"> Chihuahua</option>
        <option value = "ForCat"> For Cat</option>
        <option value = "schnauzer"> Schnauzer</option>
        <option value = "exotic"> Exotic Shorthair </option>
        <option value = "ragdoll"> Ragdoll </option>
        <option value = "shorthair"> American Shorthair</option>
        <option value = "bengal"> Bengal cat</option>
        <option value = "persian"> Persian cat</option>
        <option value = "mix"> Mix breed</option>
      </select>
    </p>
     <p> Age
      <select name = "age" id = "age">
        <option value = "no"> </option>
        <option value = "any"> Any </option>
        <option value = "5m"> 0-5 months </option>
        <option value = "12m"> 6-12 months </option>
        <option value = "5y"> 1-5 years </option>
        <option value = "10y"> 6-10 years</option>
      </select>
    </p>

    <p> Gender
      <select name = "gender" id = "gender">
        <option value = "no"> </option>
        <option value = "any"> Any </option>
        <option value = "male"> Male </option>
        <option value = "female"> Female </option>
      </select>
    </p>

    <p>Color
      <select name = "color" id = "color">
        <option value = "no"> </option>
        <option value = "any"> Any </option>
        <option value = "black"> Black </option>
        <option value = "brown"> Brown </option>
        <option value = "white"> White</option>
        <option value = "golden"> Golden</option>
        <option value = "gray"> Gray</option>
      </select>
    </p>
    <p> Gets along with
      <select name = "get along with" id = "alongWith">
        <option value = "no"> </option>
        <option value = "dog"> other dogs </option>
        <option value = "cat"> other cats </option>
        <option value = "children"> Suitable for a family with small children </option>
      </select>
    </p>

    <p> Please describe some detail about your animal:<br/> <textarea rows="4" cols="50" id = "detail"></textarea> </p>
    Current owner’s name: <br/>
    <p> First Name <input type = "text" id = "first" name = "first name" size = "30" maxlength = "30" />  Family Name <input type = "text" id = "family" name = "family name" size = "30" maxlength = "30" /> </p>
    <p>
      Current owner’s email <input type = "email" id = "myEmail3" name = "email" size = "30" maxlength = "50"/>
   </p>
    <label>
      <input type = "submit"  onclick = "return validationGive()" value = "Submit" />
    </label>
    <label>
      <input type = "Reset" value = "Reset" />  
    </label>
    
    </fieldset> 
</form>
</div>

<div class="footer">
   <?php
    include('Footer.php');
   ?>
</div>

      
 </body>
</html>