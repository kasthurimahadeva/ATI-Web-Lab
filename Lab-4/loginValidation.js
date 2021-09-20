function validateLogin() {
    var username = document.getElementById("uname").value;
    var password = document.getElementById("pwd").value;
    if (username == null || username == "") {
        alert("Please Enter your Username/Email!");
            return false;
    }
    if (password == null || password == "") {
         alert("Please Enter your Password!");
            return false;
    }
    alert('Login Successful');
}