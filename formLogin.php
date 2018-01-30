

<form method = "post"  action = "login.php">

    <h3> Username <input type = "text" id = "username" name = "Username" size = "30" maxlength = "30" 
                        onmouseover = "messages(0)" onmouseout = "messages(2)" onblur = "validationUserName()"/> </h3> 
    <h3> Password <input type = "password" id = "password" name = "Password" size = "30" maxlength = "30" 
                        onmouseover = "messages(1)" onmouseout = "messages(2)" onblur = "validationPassWord()"/> </h3>

    <label>
      <input type = "submit" value = "Submit" name = "SubmitLogin" />
       </label>
    <label>
      <input type = "Reset" value = "Reset" />  
       </label>
    <label>
      <input type = "button" value = "New User" onclick = "window.location.href = 'account.php';"/>
       </label>

</form>
<textarea id = "adviceBox"  rows = "3"  cols = "50" style = "position: absolute; right: 200px; top: 10px">
    </textarea>
