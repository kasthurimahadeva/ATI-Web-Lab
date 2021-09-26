function validateSignup(){
	
	var email=document.forms["signupForm"]["email"].value;
	var password=document.forms["signupForm"]["password"].value;
	var password2=document.forms["signupForm"]["password2"].value;
    var fname=document.forms["signupForm"]["fname"].value;
    var lname=document.forms["signupForm"]["lname"].value;

    if(fname==null || fname=="" ){
            alert("Enter the First Name")
           return false;
    }

    if(lname==null || lname=="" ){
            alert("Enter the Last Name")
            return false;
    }   

    if(email==null || email==""){
            alert("Enter the E-mail")
            return false;
    }

    if(password==null || password==""){
            alert("Enter the Password")
            return false;
    }

    if(password2==null || password2==""){
            alert("Enter the Confirm Password")
            return false;
    }

 	if(password != password2){
            alert("Password Don't Match")
            return false;
    }
        

    if (fname != '' && lname != '' && email != '' && password != '' && password2 != '' && password == password2){
            alert("Signup Successfull");
    }             

}

