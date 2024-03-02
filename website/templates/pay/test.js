
function validateconfirmpassword()
{
var pass= document.forms[0]["pword"].value;
var cpass= document.forms[0]["cpword"].value;
if(cpass==null||cpass=="")
{
	document.getElementById('message22').style.visibility="visible";
	document.getElementById('message22').innerHTML="confirm password should not be empty";
}
else if(cpass!=pass)
{
	document.getElementById('message22').style.visibility="visible";
	document.getElementById('message22').innerHTML="please enter correct password";
}
else
{
	document.getElementById('message22').style.visibility="hidden";
	
}

}
