function checkPassword() {
	if(document.getElementById("password").value!=document.getElementById("confirmPassword").value)
	{
		alert("Password Mismatched !");
		return false;
	}
	else
	{
		alert("Success");
		return true;
	}
}
function enableButton(){
	if(document.getElementById("checkBox").checked){
		document.getElementById("signUp").disabled=false;
	}
	else{
		document.getElementById("signUp").disabled=true;
	}
}
