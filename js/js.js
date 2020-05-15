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