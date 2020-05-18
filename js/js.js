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
        if(document.registerForm.username.value =="")
        {
            alert("Du har inte fyllt i något namn");
            return false;
        }
        else if(document.registerForm.password.value =="")
        {
            alert("Du har inte valt något lösenord");
            return false;
        }
        else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(!document.registerForm.email.value))
        {
            alert("Du har fyllt i en felaktig mail!")
            return false;
        }
        else
        {
            return true;
        }
}

