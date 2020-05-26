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
function ValidateEmailPass(password, email)
{
  var passw = document.getElementById("password").value;
  var email = document.getElementById("email").value;
  if(ValidateEmail(email))
  {
    if(ValidatePass(passw))
    { 
      return true;
    }
    else
    {
        alert("Your Password is incorrect");
        return false;
    } 
  }
  else
  {
    alert("Your E-mail adrress is incorrect");
    return false;
  }
}
function ValidatePost()
{
  var mess = document.fpost.messege.value;
  var trimmess = mess.trim();
    if(trimmess == "")
    {
              alert("Entry can't be empty!");
              //return false;
    }
    else
    {
     console.log("All fields are not empty");
              //return true;
    }
}     
function ValidatePass(passw)
{
  var trimpassw = passw.trim();
  passwlength = passw.length;
    if(trimpassw == "")
    {
        alert("You need to enter a correct E-mail adrress!");
        return false;
    }
    else
    {
      if(passwlength<6)
      {
        alert("Your password needs to be at least 6 characters long. Please try again!");
        return false;
      }
      else
      {       
        return true;  
      }
    }
}
function ValidateEmail(email)
{
  var trimemail = email.trim();
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
  lastindex = email.length-1;
    if(trimemail == "" || atpos == -1 || dotpos == -1 || atpos <2 || dotpos < atpos || lastindex - dotpos < 2 || dotpos - atpos < 2 || dotpos == lastindex)
    {
        alert("Please fill out the form correctly!");
        return false;
    }
    else
    { 
      return true;   
    }
}
$( document ).ready(function() {
  $('#forumpost').submit(function(e){
    e.preventDefault();
    $textval = $('#message').val();
    $.ajax({
      url: 'ProcessPost.php',
      type: 'POST',
      data: {'message':$textval},
      success: function(response) {
        alert("Nytt inlägg!");
        }
      });
  });
});

$( document ).ready(function() {
  $('#forumpost').submit(function(){
    $.ajax("#ForumWindow").load('Lab3ES_views/_ForumPosts.php');
  });
});
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
        /* - Kolla mailen! 
        else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(!document.registerForm.email.value))
        {
            alert("Du har fyllt i en felaktig mail!")
            return false;
        }
        */
        
        else if (!document.registerForm.accept.checked)
        {
            alert("Du måste godkänna användarvillkoren för att skapa ett konto.");
            return false;
        }
        else
        {
            return true;
        }
}

function Metod(){
    return true;
}