function cancel(){
    document.getElementById('id02').style.display='none'
}

function signupValidate(){


	var username=document.forms["myForm"]["username"].value;
	var email=document.forms["myForm"]["email"].value;
	var password=document.forms["myForm"]["password"].value;
	var password2=document.forms["myForm"]["password2"].value;
    var fname=document.forms["myForm"]["fname"].value;
    var lname=document.forms["myForm"]["lname"].value;



	 
	if(username==null || username=="" ){
                  document.getElementById("errorbox").innerHTML = "Enter the User Name";
                 return false;
        }

        if(fname==null || fname=="" ){
            document.getElementById("errorbox").innerHTML = "Enter the First Name";
           return false;
  }

  if(lname==null || lname=="" ){
    document.getElementById("errorbox").innerHTML = "Enter the Last Name";
   return false;
}

        if(email==null || email==""){
                  document.getElementById("errorbox").innerHTML ="Enter the E-mail";
                 return false;
        }

        if(password==null || password==""){
                  document.getElementById("errorbox").innerHTML ="Enter the Password";
                 return false;
        }

        if(password2==null || password2==""){
                  document.getElementById("errorbox").innerHTML ="Enter the Retype Password";
                 return false;
             }

 		if(password != password2){
            document.getElementById("errorbox").innerHTML ="Password Don't Match";
                 return false;
             }
        

        if (username != '' && fname != '' && lname != '' && email != '' && password != '' && password2 != '' && password == password2)


          alert("Register/Signup Successfull");
                         

}