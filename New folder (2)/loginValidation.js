function loginValidation(){
    var Username = document.getElementById("username").value;
    var Password = document.getElementById("password").value;
    if(Username == null|| Username ==""){
        alert("Please enter your user name");
    }
    else if (Password == null || Password ==""){
        alert("Please enter your password");
    }
    else if(Password.length <8){
        alert("Incorrect Password");
     }
     else
     alert("successfully login.!");
}