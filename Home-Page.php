<!DOCTYPE html>
<!-- greet.html A trivial document -->
<html lang = "en">
 <head>
 	
 <link rel = "stylesheet" type = "text/css" href = "adopt-cat-style-sheet.css">
 <script type = "text/javaScript" src = "myScript.js">  </script>
 <title> Adopt a Dog/Cat </title>
 <meta charset = "utf-8" />
 </head>
 <body onload = "myTimer()"> 
 	
<div class="header" >
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
		<h1> Welcome to the ABC Pet Rescue Shelter!</h1>
		<h1> Make Your Home a Forever Home </h1>
		<p> Are you thinking of adopting? Thank you for considering one of our animals! The goal of our website is to create great matches and connect potential adopters with amazing animals.
			<br/> To help create the best possible matches, our adoptions counselors will discuss your hopes, expectations and previous pet experiences. </p>
		<p> On this page you will be able to overview our website as a whole picture.Please feel free to browse the great photos and read the pet bios. For more information regarding find a dog<br/> or cat, dog care, cat care, have a pet to give away, and contact informations please use the grey navigation menu to the left.</p>
		<h2> New Forever Families </h2>
	<table>
		<tr>
			<td><img class = "content" src = "no1.jpg" alt = "image not found"> <br/> <h4> read detail about adoption story</h4> <a class = "content" 
				href = "https://www.petsmartcharities.org/adoption-stories/fast-moving-feline-neighbor-prompts-adoption">
			    read more</a></td> 
			<td><img class = "content" src = "no2.jpg" alt = "image not found"> <br/> <h4> read detail about adoption story</h4> <a class = "content" 
				href = "https://www.petsmartcharities.org/adoption-stories/first-time-adopters-find-puppy-love-at-first-sight">
			    read more</a></td>
			<td><img class = "content" src = "no3.jpg" alt = "image not found"> <br/> <h4> read detail about adoption story</h4> <a class = "content" 
				href = "https://www.petsmartcharities.org/adoption-stories/two-tabbies-go-from-hoarder-to-happy-home">
			    read more</a></td>
			<td><img class = "content" src = "no4.jpeg" alt = "image not found"> <br/> <h4> read detail about adoption story</h4> <a class = "content" 
				href = "https://www.petsmartcharities.org/the-great-gatsby-finds-his-forever-home">
			    read more</a></td>
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