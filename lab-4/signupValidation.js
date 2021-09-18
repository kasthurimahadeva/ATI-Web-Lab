function signUp() {
    if (document.getElementById("password").value == document.getElementById("confirm-password").value) {
        var users = new Object();
        users.fname = document.getElementById("fname").value;
        users.lname = document.getElementById("lname").value;
        users.username = document.getElementById("username").value;
        users.email = document.getElementById("email").value;
        users.password = document.getElementById("password").value && CheckPassword(password);
        

        var postUser = new XMLHttpRequest(); // new HttpRequest instance to send user details

        postUser.onreadystatechange=function(){
                if( this.status==200 && this.readyState==4 ){
                    alert( this.response )
                    
                }
            }
        postUser.open("POST", "/users", true); //Use the HTTP POST method to send data to server

        postUser.setRequestHeader("Content-Type", "application/json");

        // Convert the data in "users" object to JSON format before sending to the server.
        postUser.send(JSON.stringify(users));
        
    }
    else {
        alert("Password column and Confirm Password column doesn't match!")
    }

    
}
function CheckPassword(inputtxt){
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}$/;
        if(inputtxt.value.match(passw)) 
        { 
            alert('Welcome...')
        return true;
        }
        else
        { 
        alert('8 to 12 characters which contain at least one numeric digit, one uppercase and one lowercase letter')
            return false;
            }
        }