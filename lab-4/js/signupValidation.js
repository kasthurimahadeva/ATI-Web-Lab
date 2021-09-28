window.onload=function(){
    let fname=document.getElementById("fname");
    let lname=document.getElementById("lname");
    let email=document.getElementById("email");
    let username=document.getElementById("username");
    let password=document.getElementById("password");
    let cpassword=document.getElementById("c-password");
    let form=document.getElementById("form");
    let errorMsg=document.getElementsByClassName("error");

    form.addEventListener("submit", (e) =>{
        e.preventDefault();
        //First name validation
        if(isStrEmpty(fname)){
            errorMsg[0].innerHTML="first name cannot be empty!";
            fname.style.border="2px solid red";
            errorMsg[0].style.color="red";
    
        }
        else if(!lengthRange(fname,6,25)){
            
            errorMsg[0].innerHTML="should be between 6-25 characters!";
            fname.style.border="2px solid red";
            errorMsg[0].style.color="red";
        }
        else if(notValidName(fname)){
            errorMsg[0].innerHTML="only alphabetic characters allowed";
            fname.style.border="2px solid red";
            errorMsg[0].style.color="red";
        }
        else{
            errorMsg[0].innerHTML="valid first name!";
            fname.style.border="2px solid green";
            errorMsg[0].style.color="green";
            
        }

        //last name validation
        if(isStrEmpty(lname)){
            errorMsg[1].innerHTML="Last name cannot be empty!";
            lname.style.border="2px solid red";
            errorMsg[1].style.color="red";
    
        }
        else if(!lengthRange(lname,6,25)){
            
            errorMsg[1].innerHTML="should be between 6-25 characters!";
            lname.style.border="2px solid red";
            errorMsg[1].style.color="red";
        }
        else if(notValidName(lname)){
            errorMsg[1].innerHTML="only alphabetic characters allowed";
            lname.style.border="2px solid red";
            errorMsg[1].style.color="red";
        }
        else{
            errorMsg[1].innerHTML="valid last name!";
            lname.style.border="2px solid green";
            errorMsg[1].style.color="green";
            
        }

        //Email validation
        if(isStrEmpty(email)){
            errorMsg[2].innerHTML="E-mail address cannot be empty!";
            email.style.border="2px solid red";
            errorMsg[2].style.color="red";
        }
        else if(!ValidateEmail(email)){
            errorMsg[2].innerHTML="Email format not valid!";
            email.style.border="2px solid red";
            errorMsg[2].style.color="red";
        }
        else{
            errorMsg[2].innerHTML="valid E-mail address!";
            email.style.border="2px solid green";
            errorMsg[2].style.color="green";
        }

        //User name validation
        if(isStrEmpty(username)){
            errorMsg[3].innerHTML="Username cannot be empty!";
            username.style.border="2px solid red";
            errorMsg[3].style.color="red";
    
        }
        else if(!lengthRange(username,6,25)){
            
            errorMsg[3].innerHTML="should be between 6-25 characters!";
            username.style.border="2px solid red";
            errorMsg[3].style.color="red";
        }
        else if(notValidName(username)){
            errorMsg[3].innerHTML="only alphabetic characters allowed";
            username.style.border="2px solid red";
            errorMsg[3].style.color="red";
        }
        else{
            errorMsg[3].innerHTML="valid username!";
            username.style.border="2px solid green";
            errorMsg[3].style.color="green";
            
        }

        //Password validation
        if(isStrEmpty(password)){
            errorMsg[4].innerHTML="password cannot be empty!";
            password.style.border="2px solid red";
            errorMsg[4].style.color="red";
        }
        else if(!lengthRange(password,6,25)){
            
            errorMsg[4].innerHTML="should be between 6-25 characters!";
            password.style.border="2px solid red";
            errorMsg[4].style.color="red";
        }
        else if(notValidPassword(password)){
            errorMsg[4].innerHTML="should contain digit and special character";
            password.style.border="2px solid red";
            errorMsg[4].style.color="red";
        }
        else{
            errorMsg[4].innerHTML="valid password";
            password.style.border="2px solid green";
            errorMsg[4].style.color="green";
        }

        //Confirm Password validation
        if(isStrEmpty(cpassword)){
            errorMsg[5].innerHTML="password cannot be empty!";
            cpassword.style.border="2px solid red";
            errorMsg[5].style.color="red";
        }
        else if(password.value!=cpassword.value){
            errorMsg[5].innerHTML="password does not match";
            cpassword.style.border="2px solid red";
            errorMsg[5].style.color="red";
        }
        else{
            errorMsg[5].innerHTML="password matched";
            cpassword.style.border="2px solid green";
            errorMsg[5].style.color="green";
        }
    });
}

    /* function for check string empty or not */
    function isStrEmpty(str){
        let text=str.value;
        if(text===""){
            return true;
        }
        else{
            return false;
        }
    }
    
    /* fuction for check length of charcter */
    function lengthRange(inputtxt, minlength, maxlength)
    {  	
       let userInput = inputtxt.value;  
       if(userInput.length >= minlength && userInput.length <= maxlength)
          {  	
            return true;  	
          }
       else
          { 		
            return false;  	
          }  
    }
    
    /*  function for check string has only alphabetic characters*/
    function notValidName(str){
        var nameRegex=/^[a-zA-Z\-]+$/;
        var text=str.value.match(nameRegex);
        if(text==null){
            return true;
        }
        else{
            return false;
        }
    }
        
    /* check password should contain at least one digit and special characters */
    function notValidPassword(inputtxt) 
    { 
        var special= /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        var num=/\d/;
    
            if((!inputtxt.value.match(special)) || (!inputtxt.value.match(num))){ 
                return true;
            }
            else
            { 
                return false;
            }
    }

    /* function for check valid emai id */
    function ValidateEmail(inputText){
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(inputText.value.match(mailformat)){
            return true;
        }
        else{
            return false;
        }
    }