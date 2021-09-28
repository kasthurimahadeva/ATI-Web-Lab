function call2(){
  var fname = document.forms['Signup_form']["fname"].value;
  var lname= document.forms['Signup_form']["lname"].value;
  var uname= document.forms['Signup_form']["uname"].value;
  var email= document.forms['Signup_form']["email"].value;
  var pass1= document.forms['Signup_form']["pass1"].value;
  var pass2= document.forms['Signup_form']["pass2"].value;

  if(fname == null || fname==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Firstname";
      
    return false;
  }
  if(lname == null || lname ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Lastname";
    return false;
  }
  
  if(email== null || email ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Email";
    return false;
  }
  if(uname == null || uname ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Username";
    return false;
  }
  if(pass1 == null || pass1 ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the Password";
    return false;
  }
  if(pass2 == null || pass2 ==''){
      document.getElementById("errorbox").innerHTML =
      "Enter the ConfirmPassword";

     
  if(pass1 != pass2){
    document.getElementById("errorbox").innerHTML=
    "password dont match"
  }
    return false;
  }
  if( fname != '' && lname != '' && email != ''  && uname != '' && pass1 != ' ' && pass2 != ''  && pass1 == pass2 ){
      alert("Signup succesfully");
  }
}