     
var helpers = ["Your username can contain letters (both upper and lower case) and digits only",
  "Your password must be at least 4 characters long (characters are to be letters and digits only), have at least one letter and at least one digit",
  "This box provides advice on filling out the form on this page. Put the mouse cursor over any input field to get advice"]

function messages(adviceNumber) 
{
  document.getElementById("adviceBox").value = helpers[adviceNumber];
}

function validationUserName()
{
	var usnam = document.getElementById("username").value;
	var a = usnam.search(/^[a-zA-Z0-9]+$/);
	if(a == -1)
	{
		alert("The Username format is not correct! Please enter your Username again!");
		return false;
	}
	else
		return true;
}
function validationPassWord()
{
	var paswd = document.getElementById("password").value;
	var b = paswd.search(/^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{4,}$/);
	if(b == -1)
	{
		alert("The Password format is not correct! Please enter your Password again!");
		return false;
	}
	else
		return true;
		
}
