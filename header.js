//helper function
function $(id){
var element = document.getElementById(id);
if( element == null )
alert( "Programmer error: " + id + " does not exist." );
return element;
}
//Login validation
function warnLoginInvalid(login){
if($(login).value == "")
$('loginInvalid').innerHTML = "Login name cannot be empty.";
else $('loginInvalid').innerHTML = "";
}
//Password validation
function warnPasswordInvalid(password){
if($(password).value == "")
$('loginInvalid').innerHTML = "Password cannot be empty.";
else $('loginInvalid').innerHTML = "";
}