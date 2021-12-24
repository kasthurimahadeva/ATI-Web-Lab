function call2(){
    var fname = document.forms['signup_form']["fname"].value;
    var lname= document.forms['signup_form']["lname"].value;
    var uname= document.forms['signup_form']["uname"].value;
    var email= document.forms['signup_form']["email"].value;
    var pass1= document.forms['signup_form']["pass1"].value;
    var pass2= document.forms['signup_form']["pass2"].value;
  
    if(fname == null || fname==''){
        document.getElementById("errorbox1").innerHTML =
        "Enter the Firstname";
        
      return false;
    }
    if(lname == null || lname ==''){
        document.getElementById("errorbox2").innerHTML =
        "Enter the Lastname";
      return false;
    }
    
    if(email== null || email ==''){
        document.getElementById("errorbox3").innerHTML =
        "Enter the Email";
      return false;
    }
    if(uname == null || uname ==''){
        document.getElementById("errorbox4").innerHTML =
        "Enter the Username";
      return false;
    }
    if(pass1 == null || pass1 ==''){
        document.getElementById("errorbox5").innerHTML =
        "Enter the Password";
      return false;
    }
    if(pass2 == null || pass2 ==''){
        document.getElementById("errorbox6").innerHTML =
        "Enter the ConfirmPassword";
  
       
    if(pass1 != pass2){
      document.getElementById("errorbox6").innerHTML=
      "password dont match"
    }
      return false;
    }
}