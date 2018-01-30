
var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var current = new Date();
    var date = current.getDate();
    var month = current.getMonth();
    var day = current.getDay();
    var year = current.getFullYear();
    
    var sevenDay = new Array('Sunday','Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturady');
    var twelveMonth = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
    
    document.getElementById("time").innerHTML = (sevenDay[day] +", "+ twelveMonth[month] +" " + date +", " + year + "       ")
    											+ current.toLocaleTimeString();
	
}

function validationFindDog()
{
	var t = true;
	var a = document.getElementById("breedDog");
	if(a.value == "no")
	{
		alert("The Drop box of 'Breed of dog' is left blank! Please go back to choose one option.");
		t = false;
	}
	var b = document.getElementById("ageDog");
	if(b.value == "no")
	{
		alert("The Drop box of 'Age' is left blank! Please go back to choose one option.");
		t = false;
	}
	var c = document.getElementById("genderDog");
	if(c.value == "no")
	{
		alert("The Drop box of 'Gender' is left blank! Please go back to choose one option.");
		t = false;
	}
	var d = document.getElementById("colorDog");
	if(d.value == "no")
	{
		alert("The Drop box of 'Color' is left blank! Please go back to choose one option.");
		t = false;
	}
	var e = document.getElementById("alongDog");
	if(e.value == "no")
	{
		alert("The Drop box of 'Whether it needs to get along with' is left blank! Please go back to choose one option.");
		t = false;
	}
	var pat = document.getElementById("myEmailDog").value;
	var a = pat.search(/^([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/);

	if(a == -1)
	{
		alert("The Email format is not correct! Please enter your Email address again!")
		t = false;
	}

	if(t == false)
		return false;
	
	else 
		return true;
}

function validationFindCat()
{	
	var f = document.getElementById("breedCat");
	if(f.value == "no")
	{
		alert("The Drop box of 'Breed of cat' is left blank! Please go back to choose one option.");
		t = false;
	}
	var g = document.getElementById("ageCat");
	if(g.value == "no")
	{
		alert("The Drop box of 'Age' is left blank! Please go back to choose one option.");
		t = false;
	}
	var h = document.getElementById("genderCat");
	if(h.value == "no")
	{
		alert("The Drop box of 'Gender' is left blank! Please go back to choose one option.");
		t = false;
	}
	var i = document.getElementById("colorCat");
	if(i.value == "no")
	{
		alert("The Drop box of 'Color' is left blank! Please go back to choose one option.");
		t = false;
	}
	var j = document.getElementById("alongCat");
	if(j.value == "no")
	{
		alert("The Drop box of 'Whether it needs to get along with' is left blank! Please go back to choose one option.");
		t = false;
	}
	var pat = document.getElementById("myEmailCat").value;
	var b = pat.search(/^([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/);

	if(b == -1)
	{
		alert("The Email format is not correct! Please enter your Email address again!")
		t = false;
	}

	if(t == false)
		return false;
	
	else 
		return true;
}

function validationGive()
{
	var a = document.getElementById("catOrDog");
	var t = true;
	if(a.value == "no")
	{
		alert("The Drop box of 'Cat or dog' is left blank! Please go back to choose one option.");
		 t = false;
	}
	var b = document.getElementById("breedOfDogOrCat");
	if(b.value == "no")
	{
		alert("The Drop box of 'Breed of dog or cat' is left blank! Please go back to choose one option.");
		t = false;
	}
	var c = document.getElementById("age");
	if(c.value == "no")
	{
		alert("The Drop box of 'Age' is left blank! Please go back to choose one option.");
		t = false;
	}
	var d = document.getElementById("gender");
	if(d.value == "no")
	{
		alert("The Drop box of 'Gender' is left blank! Please go back to choose one option.");
		t = false;
	}
	var e = document.getElementById("color");
	if(e.value == "no")
	{
		alert("The Drop box of 'Color' is left blank! Please go back to choose one option.");
		t = false;
	}
	var f = document.getElementById("alongWith");
	if(f.value == "no")
	{
		alert("The Drop box of 'Gets along with' is left blank! Please go back to choose one option.");
		t = false;
	}

	var detail = document.getElementById("detail");
	if(detail.value == "")
	{
		alert("The 'Text Area' is left blank! Please go back and describe some detail about your animal!");
		t = false;
	}

	var first = document.getElementById("first");
	if(first.value == "")
	{
		alert("The 'First Name' is left blank!");
		t = false;
	}
	var family = document.getElementById("family");
	if(family.value == "")
	{
		alert("The 'Family Name' is left blank!");
		t = false;
	}

	var pat = document.getElementById("myEmail3").value;
	var a = pat.search(/^([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_\/_\/.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/);

	if(a == -1)
	{
		alert("The Email format is not correct! Please enter your Email address again!");
		t = false;
	}

	if(t == false)
		return false;
	
	else 
		return true;
}


