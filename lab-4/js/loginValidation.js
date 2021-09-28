window.onload=function(){
    let username=document.getElementById("username");
    let password=document.getElementById("password");
    let form=document.getElementById("form");
    let errorMsg=document.getElementsByClassName("error");

    form.addEventListener("submit", (e) =>{
        e.preventDefault();

        // username validation
        if(isStrEmpty(username)){
            errorMsg[0].innerHTML="Username cannot be empty!";
            username.style.border="2px solid red";
            errorMsg[0].style.color="red";
    
        }
        else if(!lengthRange(username,6,25)){
            
            errorMsg[0].innerHTML="should be between 6-25 characters!";
            username.style.border="2px solid red";
            errorMsg[0].style.color="red";
        }
        else if(notValidName(username)){
            errorMsg[0].innerHTML="only alphabetic characters allowed";
            username.style.border="2px solid red";
            errorMsg[0].style.color="red";
        }
        else{
            errorMsg[0].innerHTML="valid username!";
            username.style.border="2px solid green";
            errorMsg[0].style.color="green";
            
        }
        // password validation
        if(isStrEmpty(password)){
            errorMsg[1].innerHTML="password cannot be empty!";
            password.style.border="2px solid red";
            errorMsg[1].style.color="red";
        }
        else if(!lengthRange(password,6,25)){
            
            errorMsg[1].innerHTML="should be between 6-25 characters!";
            password.style.border="2px solid red";
            errorMsg[1].style.color="red";
        }
        else if(notValidPassword(password)){
            errorMsg[1].innerHTML="should contain digit and special character";
            password.style.border="2px solid red";
            errorMsg[1].style.color="red";
        }
        else{
            errorMsg[1].innerHTML="valid password";
            password.style.border="2px solid green";
            errorMsg[1].style.color="green";
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