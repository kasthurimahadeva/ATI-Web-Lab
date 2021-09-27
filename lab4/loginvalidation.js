function validateLogin(){
    var username = document.getElementById("uname").value;
    var password= document.getElementById("pwd").value;
    if (username == null || username == "") {
         alert("Enter username or email");
            return false;
    }
    if (password == null || password == "") {
         alert("Enter password!");
           return false;
    }
    alert('Login successful');
    alert('login faild');
  }
    
  