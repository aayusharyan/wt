function Validation(){
	var emailid=document.getElementById("email").value;
	var mobile=document.getElementById("extra").value;
	atpos=emailid.indexOf("@");
	dotpos=emailid.lastIndexOf(".");
	if(atpos<1 || (dotpos-atpos)<2){
		alert("Please enter correct email ID");
		document.form1.emailid.focus();
		return false;
	}
	else if(isNaN(mobile) || mobile.length<10)
	{
		alert("Enter correct phone number");
		document.form1.mobile.focus();
		return false;
	}
	else{
		return true;
	}
}