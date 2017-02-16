var error="";
var password = $(".password");
//var confirmPassword = $("#confirm_password");
var username = $(".username");
var email = $("#email");
var logclick=$("#lifirst");
var signclick=$("#lisecond");

//Hide error box
$("form span").hide();


/*function arePasswordsMatching() 
{
  return password.val() === confirmPassword.val();
}
*/
function username_validation(){
	var length=username.val().length;
	var regExp=/^[a-zA-Z0-9]+$/;
	if(length==0)
		error="Username should not be empty!!";
	else if(length<5 || length>15)
		error="Username length should be between 5 to 15 !!";
	else if(!username.val().match(regExp))
		error="Username must have an alphanumeric characters only !!";
	else
	{
		return true;
	}
	$( ".error1" ).empty();
	var errorNode = document.createTextNode(error);
     $(".error1").append(errorNode);
	return false;
}

function email_validation(){
	var length=email.val().length;
	var regExp= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(length==0)
		error="Email should not be empty!!";
	//else if(length<10 || length>30)
	//	error="Email length should be between 10 to 30 !!";
	else if(!email.val().match(regExp))
		error="Invalid Email address!!";
	else
	{
		error="";
		return true;
	}	
	$( "#error0" ).empty();
	var errorNode = document.createTextNode(error);
    $("#error0").append(errorNode);
	return false;
}

function password_validation(){
	var length=password.val().length;
	if(length==0)
		error="Password should not be empty!!";
	else if(length<5 || length>20)
		error="Password length should be greater than 6 characters !!";
	else
	{
		error="";
		return true;
	}
	$( ".error2" ).empty();
	var errorNode = document.createTextNode(error);
    $(".error2").append(errorNode);
	return false;
}

/*function firstname_validation(){
	var length=firstname.val().length;
	var regExp=/^[a-zA-Z]+$/;
	if(length==0)
		error="First Name should not be empty!!";
	else if(length>15)
		error="First Name length should not be greater than 15 characters !!";
	else if(!firstname.val().match(regExp))
		error="Invalid first name !!";
	else
	{
		error="";
		return true;
	}
	$( "#error" ).append( document.createTextNode( error ) );
	return false;
}

function lastname_validation(){
	var length=lastname.val().length;
	var regExp=/^[a-zA-Z]+$/;
	if(length==0)
		error="Last Name should not be empty!!";
	else if(length>15)
		error="Last Name length should not be greater than 15 characters !!";
	else if(!lastname.val().match(regExp))
		error="Invalid last name !!";
	else
	{
		error="";
		return true;
	}	
	return false;
}*/



function usernameEvent() {
  if(username_validation()) {
    username.next().hide();
  } 
  else { 
    username.next().show();
  }
}

/*function firstnameEvent() {
  if(firstname_validation()) {
    firstname.next().hide();
  } 
  else { 
    firstname.next().show();
  }
}

function lastnameEvent() {
  if(lastname_validation()) {
    lastname.next().hide();
  } 
  else { 
    lastname.next().show();
  }
}*/

function emailEvent() {
  if(email_validation()) {
    email.next().hide();
  } 
  else { 
    email.next().show();
  }
}

function passwordEvent(){
    if(password_validation()) {
      password.next().hide();
    } 
    else {
      password.next().show();
    }
}

/*function confirmPasswordEvent() {
  if(arePasswordsMatching()) {
    confirmPassword.next().hide();
  } 
  else { 
    confirmPassword.next().show();
  }
}*/

function canSubmit() {
  return username_validation() && email_validation() && password_validation()  ;
}

function enableSubmitEvent() {
  $("#submit").prop("disabled", !canSubmit());
}

username.focus(usernameEvent).keyup(usernameEvent);

email.focus(emailEvent).keyup(emailEvent);

password.focus(passwordEvent).keyup(passwordEvent);

logclick.click(function(){$("form span").hide();});

signclick.click(function(){$("form span").hide();});


enableSubmitEvent();

/*firstname.focus(firstnameEvent).keyup(firstnameEvent);

lastname.focus(lastnameEvent).keyup(lastnameEvent);

confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

*/
