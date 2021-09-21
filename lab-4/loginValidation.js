function validateForm() {
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
           alert('login successful')
        return true;
        }
        else
        { 
            alert('Password must be contain at least one uppercase and one number within 8 to 12 letters')
            return false;
            }
        }