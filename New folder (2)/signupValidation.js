function signupValidation(){
   var Fullname = document.getElementById("fullname").value;
   var Username = document.getElementById("username").value;
   var Emails = document.getElementById("emails").value;
   var Password = document.getElementById("password").value;
   var ConfirmPassword = document.getElementById("confirmpassword").value;
   
   if(Fullname ==""){
      alert("Please enter your full name");
   }
   if(Username ==""){
      alert("Please enter your user name");
   }
   if(Emails ==""){
      alert("Please enter your emails");
   }
   if(Password ==""){
      alert("Please enter your password");
   }
   if(ConfirmPassword ==""){
      alert("Please enter your password");
   }
   else if (ConfirmPassword !== Password){
      alert("Incorrect Password");
   }
   else
   alert("successfully signup.!");
}
