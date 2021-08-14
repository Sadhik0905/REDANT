document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);


function validate1(){
	var name = document.getElementById("name");
	var mail = document.getElementById("email");
	var password = document.getElementById("pass");
	var repassword = document.getElementById("repass");

	if(name.value == ""){
		alert("Enter The Name");
		return false;
	}
	else if(mail.value == ""){
		alert("Enter Valid Email");
		return false;
	}
	else if(password.value == ""){
		alert("Enter Password");
		return false;
	}
	else if(repassword.value != password.value){
		alert("Password Didn't Match");
		return false;
	}
	
}
