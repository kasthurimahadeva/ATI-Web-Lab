function validateLogin() {
    if (validateIsEmpty(loginForm.username, "Username") && 
        validateIsEmpty(loginForm.password, "Password") &&
        CheckPassword(password)) {
        return true;
    } else {
        return false;
    }
}

function validateIsEmpty(obj, objName) {
    if(obj.value === "") {
        alert(objName + " cannot be empty");
        return false;
    }
    return true;
}

function CheckPassword(inputtxt){
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}$/;
    if(inputtxt.value.match(passw)) 
    { 
        alert('Login successfully')
    return true;
    }
    else
    { 
    alert('8 to 12 characters which contain at least one numeric digit, one uppercase and one lowercase letter')
        return false;
        }
    }
