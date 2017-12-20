<script>

var username =  document.forms["vform"]["username"];
var dispalyname =  document.forms["vform"]["dispalyname"];
var password =  document.forms["vform"]["password"];
var confirmpassword =  document.forms["vform"]["confirmPassword"];
var pnumber =  document.forms["vform"]["phonenumber"];
var address =  document.forms["vform"]["address"];




var username_error = document.getElementById("username_error");
var dispalyname_error = document.getElementById("dispalyname_error");
var password_error = document.getElementById("password_error");
var confirmPass_error = document.getElementById("confirmPassword_error");
var phone_error = document.getElementById("phoneNumber_error");
var address_error = document.getElementById("address_error");






username.addEventListener("blur", usernameVerify, true);
dispalyname.addEventListener("blur", displaynameVerify, true);
password.addEventListener("blur", passwordVerify, true);
confirmpassword.addEventListener("blur", confirmpasswordVerify, true);
pnumber.addEventListener("blur", pnumberVerify, true);
pnumber.addEventListener("blur", addressVerify, true);







function Validate(){
    

     if(username.value == ""){

     	username.style.border = "1px solid red";
     	username_error.textContent = "Username is required";
     	username.focus();
        
     	return false;
     }




     if(dispalyname.value == ""){

     	dispalyname.style.border = "1px solid red";
     	dispalyname_error.textContent = "Display Name is required";
     	dispalyname.focus();
     	return false;
     }



     if(password.value == ""){

     	password.style.border = "1px solid red";
     	password_error.textContent = "Password is required";
     	password.focus();
     	return false;
     }



     if(confirmpassword.value == ""){

     	confirmpassword.style.border = "1px solid red";
     	confirmPass_error.textContent = "Can not be empty";
     	confirmpassword.focus();
     	return false;
     }

    if(confirmpassword.value != password.value)
     {

     	confirmpassword.style.border = "1px solid red";
     	confirmPass_error.textContent = "Password Not Matched";
     	confirmpassword.focus();
     	return false;
     }

     

     if(pnumber.value == ""){

     	pnumber.style.border = "1px solid red";
     	phone_error.textContent = "Phone Number is required ";
     	pnumber.focus();
     	return false;
     }


     if(address.value == ""){

        address.style.border = "1px solid red";
        address_error.textContent = "Address is required ";
        address.focus();
        return false;
     }


   }




function usernameVerify(){

     if(username.value != "")
     {
        
        username.style.border = " 1px solid  #007bff";
        username_error.innerHTML = "";
        return true;



     }

}



function displaynameVerify(){


      if(dispalyname.value != "")
     {
        
        dispalyname.style.border = " 1px solid  #007bff";
        dispalyname_error.innerHTML = "";
        return true;

     }

}


function passwordVerify(){

	if(password.value != "")
     {
        
        password.style.border = " 1px solid  #007bff";
        password_error.innerHTML = "";
        return true;

     }
}



function confirmpasswordVerify(){

	if(confirmpassword.value != "" && confirmpassword.value == password.value)
     {
        
        confirmpassword.style.border = " 1px solid  #007bff";
        confirmPassword_error.innerHTML = "";
        return true;

     }
}



function pnumberVerify(){

	if(pnumber.value != "")
     {
        
        pnumber.style.border = " 1px solid  #007bff";
        phone_error.innerHTML = "";
        return true;

     }



}



function addressVerify(){

    if(address.value != "")
     {
        
        address.style.border = " 1px solid  #007bff";
        address_error.innerHTML = "";
        return true;

     }



}




</script>


