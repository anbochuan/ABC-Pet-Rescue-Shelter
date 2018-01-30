<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
 <link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
 <script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Find a dog or cat page </title>
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
	<form action = "Browse-Available-Pets-page.php" method = "post">
		<fieldset>
		<legend> If you would like to adopt a dog, please fill out this form below </legend>

    <p> Breed of dog
    	<select name = "breed" id = "breedDog">
            <option value = "no">  </option>
    		<option value = "any"> Any </option>
    		<option value = "GoldenRetriever"> Golden Retriever </option>
    		<option value = "pug"> Pug </option>
    		<option value = "labrador"> Labrador</option>
    		<option value = "chihuahua"> Chihuahua</option>
    		<option value = "schnauzer"> Schnauzer</option>
    	</select>
    </p>
     <p> Age
    	<select name = "age" id = "ageDog">
            <option value = "no">  </option>
            <option value = "5months"> 0-5 months </option>
            <option value = "12months"> 6-12 months </option>
            <option value = "5-years-old"> 1-5 years </option>
            <option value = "10-years-old"> 6-10 years</option>
    	</select>
    </p>

    <p> Gender
    	<select name = "gender" id = "genderDog">
            <option value = "no">  </option>
    		<option value = "male"> Male </option>
    		<option value = "female"> Female </option>
    	</select>
    </p>

    <p>Color
    	<select name = "color" id = "colorDog">
            <option value = "no">  </option>
    		<option value = "black"> Black </option>
    		<option value = "brown"> Brown </option>
    		<option value = "white"> White</option>
    		<option value = "golden"> Golden</option>
    		<option value = "gray"> Gray</option>
    	</select>
    </p>
    <p> Whether it needs to get along with
    	<select name = "getalongwith" id = "alongDog">
            <option value = "no">  </option>
    		<option value = "otherDogs"> other dogs </option>
    		<option value = "otherCats"> other cats </option>
    		<option value = "children"> Suitable for a family with small children </option>
    	</select>
    </p>
    
    <label>
			<input type = "submit"  onclick = "return validationFindDog()" value = "Submit" name = "adoptDog"/>
		</label>
		<label>
			<input type = "Reset" value = "Reset" />	
		</label>
    
    </fieldset> <br/><br/><br/>
</form>

<form action = "Browse-Available-Pets-page.php" method = "post">
    <fieldset>
		<legend> If you would like to adopt a cat, please fill out this form below </legend>
    	
    <p> Breed of cat
    	<select name = "breed" id = "breedCat">
            <option value = "no">  </option>
    		<option value = "any"> Any </option>
    		<option value = "exotic"> Exotic Shorthair </option>
    		<option value = "ragdoll"> Ragdoll </option>
    		<option value = "shorthair"> American Shorthair</option>
    		<option value = "bengal"> Bengal cat</option>
    		<option value = "persian"> Persian cat</option>
    	</select>
    </p>
     <p> Age
    	<select name = "age" id = "ageCat">
            <option value = "no">  </option>
    		<option value = "5months"> 0-5 months </option>
    		<option value = "12months"> 6-12 months </option>
    		<option value = "5-years-old"> 1-5 years </option>
    		<option value = "10-years-old"> 6-10 years</option>
    	</select>
    </p>

    <p> Gender
    	<select name = "gender" id = "genderCat">
            <option value = "no">  </option>
    		<option value = "male"> Male </option>
    		<option value = "female"> Female </option>
    	</select>
    </p>

    <p>Color
    	<select name = "color" id = "colorCat">
            <option value = "no">  </option>
    		<option value = "black"> Black </option>
    		<option value = "brown"> Brown </option>
    		<option value = "white"> White</option>
    		<option value = "golden"> Golden</option>
    		<option value = "gray"> Gray</option>
    	</select>
    </p>
    <p> Whether it needs to get along with
    	<select name = "getalongwith" id = "alongCat">
            <option value = "no">  </option>
    		<option value = "otherDogs"> other dogs </option>
    		<option value = "otherCats"> other cats </option>
    		<option value = "children"> Suitable for a family with small children </option>
    	</select>
    </p>
    
    <label>
			<input type = "submit" onclick = "return validationFindCat()" value = "Submit" name = "adoptCat"/>
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