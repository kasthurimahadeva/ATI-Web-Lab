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

//form validation

function call(){
    var uname = document.forms['loginform']["uname"].value;
    var pwd = document.forms['loginform']["pwd"].value;

    if(uname == null || uname==''){
        document.getElementById("errorbox").innerHTML =
        "Enter the Uername";
        
      return false;
    }
    if(pwd == null || pwd==''){
        document.getElementById("errorbox").innerHTML =
        "Enter the Password";
      return false;
    }
    if(uname != ' ' && pwd != '' ){
        alert("Login succesfully");
    }
}