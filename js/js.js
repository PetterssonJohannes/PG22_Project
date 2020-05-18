function ValidateLogin(){
/* Kollar bara om det är tomt eller inte, dvs inte om det matchar */
if(document.loginForm.password.value =="" || document.loginForm.username.value == ""){
    alert("Please do not leave any input-field blank.");
    return false;
}
else return true;
}

function ErrorMessage(){
    alert("The username and password does not match.");
}

function ValidateRegistration(){
if(document.registerForm.username.value =="" || document.registerForm.password.value =="" || document.registerForm.email.value ==""){
    alert("Du måste fylla i alla fält.");
    return false;
}
else{
    alert("hej");
    return true;
}
}
