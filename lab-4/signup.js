
//using add event listener for form 
const inputs = document.querySelectorAll('.input');


function focusFunc(){
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}


function blurFunc(){
    let parent = this.parentNode.parentNode;
    if(this.value==""){
        parent.classList.remove('focus');
    }
   
}



inputs.forEach(input => {
    input.addEventListener('focus', focusFunc);
    input.addEventListener('blur', blurFunc);
});


//check the blank fields
function call(){
    var fname = document.forms['signupform']["fname"].value;
    var lname= document.forms['signupform']["lname"].value;
    var uname= document.forms['signupform']["uname"].value;
    var email= document.forms['signupform']["email"].value;
    var pass1= document.forms['signupform']["pass1"].value;
    var pass2= document.forms['signupform']["pass2"].value;

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
    if(uname == null || uname ==''){
        document.getElementById("errorbox3").innerHTML =
        "Enter the Username";
      return false;
    }
    if(email== null || email ==''){
        document.getElementById("errorbox4").innerHTML =
        "Enter the Email";
      return false;
    }
    if(pass1 == null || pass1 ==''){
        document.getElementById("errorbox5").innerHTML =
        "Enter the Password";
      return false;
    }
    if(pass2 == null || pass2 ==''){
        document.getElementById("errorbox").innerHTML =
        "Enter the ConfirmPassword";
       
     return false
    }
    if(pass1 != pass2){
      document.getElementById("errorbox").innerHTML =
      "Password didn't match";
     
   return false
  }
    if(pass1 != ' ' && pass2 != '' && pass2 != ''  && fname != '' && lname != '' && uname != '' && email != ''  ){
        alert("Signup succesfully");
       
    }
}


//password validation
function validate(){
            
    var pass = document.getElementById('pass1');
    var upper = document.getElementById('upper');
    var lower = document.getElementById('lower');
    var num = document.getElementById('number');
    var len = document.getElementById('length');
    var sp_char = document.getElementById('special_char');




//check if pass value contain a number
if(pass.value.match(/[0-9]/)) {

num.style.color = 'green'

    
}
else{
    num.style.color ='red'
}
//check if pass value contain a uppercase
if(pass.value.match(/[A-Z]/)) {

upper.style.color = 'green'

    
}
else{
    upper.style.color ='red'
}
//check if pass value contain a lowercase
if(pass.value.match(/[a-z]/)) {

lower.style.color = 'green'

   
}
else{
  lower.style.color ='red'
}
//check if pass value contain a special char
if(pass.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\\=\?\>\<\.\,]/)) {

sp_char.style.color = 'green'

   
}
else{
  sp_char.style.color ='red'
}
//check if pass value contain a 
if(pass.value.length > 6 && pass.value.length < 12) {

len.style.color = 'green'

   
}
else{
  len.style.color ='red'
}









}