function call1(){
    var uname=document.forms["login_form"]["uname"].value;
    var upassword=document.forms["login_form"]["upassword"].value;

if(uname==null || uname=="" ){
          document.getElementById("errorBox").innerHTML =
           "enter the user name";
         return false;
}

if(upassword==null || upassword==""){
          document.getElementById("errorBox").innerHTML =
           "enter the password";
         return false;
}

if (uname != '' && upassword != '' ){
 alert("Login successfully");
                 }

}