
  <form action = "login.php" method = "post">
  <fieldset>
    <legend> If you have a pet to give away, please fill out this form below </legend>
    <p> Cat or dog
      <select name = "Catordog" id = "catOrDog">
        <option value = "no">  </option>
        <option value = "cat"> Cat </option>
        <option value = "dog"> Dog </option>
      </select>
    </p>
    <p> Breed of dog  or cat
      <select name = "breed" id = "breedOfDogOrCat">
        <option value = "no"> </option>
        <option value = "ForDog"> For Dog </option>
        <option value = "GoldenRetriever"> Golden Retriever </option>
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
        <option value = "5months"> 0-5 months </option>
        <option value = "12months"> 6-12 months </option>
        <option value = "5-years-old"> 1-5 years </option>
        <option value = "10-years-old"> 6-10 years</option>
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
      <select name = "getalongwith" id = "alongWith">
        <option value = "no"> </option>
        <option value = "otherDogs"> other dogs </option>
        <option value = "otherCats"> other cats </option>
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
      <input type = "submit"  onclick = "return validationGive()" value = "Submit" name = "SubmitPetInfo" />
    </label>
    <label>
      <input type = "Reset" value = "Reset" />  
    </label>
    
    </fieldset> 
</form>
