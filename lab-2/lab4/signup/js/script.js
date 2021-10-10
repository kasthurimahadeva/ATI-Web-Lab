function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var fname = document.Form.fname.value;
    var lname = document.Form.lname.value;
    var uname = document.Form.uname.value;
    var email = document.Form.email.value;
    var mobile = document.Form.mobile.value;
    var country = document.Form.country.value;
    var gender = document.Form.gender.value;
    

    var fnameErr =  lnameErr = unameErr  = emailErr = mobileErr = countryErr = genderErr = true;
    

    if(fname == "") {
        printError("fnameErr", "Please enter your first Name");
        var elem = document.getElementById("fname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fnameErr", "Please enter a valid fname");
            var elem = document.getElementById("fname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
            var elem = document.getElementById("fname");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }


    if(lname == "") {
        printError("lnameErr", "Please enter your Last Name");
        var elem = document.getElementById("lname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("lnameErr", "Please enter a valid lname");
            var elem = document.getElementById("lname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
            var elem = document.getElementById("lname");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }


    if(uname == "") {
        printError("unameErr", "Please enter your User Name");
        var elem = document.getElementById("uname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(uname) === false) {
            printError("unameErr", "Please enter a valid uname");
            var elem = document.getElementById("uname");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("unameErr", "");
            unameErr = false;
            var elem = document.getElementById("uname");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    
   

    if(email == "") {
        printError("emailErr", "Please enter your email address");
         var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
            var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("emailErr", "");
            emailErr = false;
             var elem = document.getElementById("email");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    }
    
 
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
        var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
            var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
            var elem = document.getElementById("mobile");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }
    

    if(country == "Select") {
        printError("countryErr", "Please select your country");
        var elem = document.getElementById("country");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("countryErr", "");
        countryErr = false;
        var elem = document.getElementById("country");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    

    if(gender == "") {
        printError("genderErr", "Please select your gender");
        var elem = document.getElementById("gender");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("genderErr", "");
        genderErr = false;
        var elem = document.getElementById("gender");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    
    
    if((fnameErr || lnameErr ||  unameErr ||  emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } 
};