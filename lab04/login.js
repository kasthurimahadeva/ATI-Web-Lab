//form validation

function call(){
  var uname = document.forms['loginform']["uname"].value;
  var pwd = document.forms['loginform']["pwd"].value;

  if(uname == null || uname==''){
      document.getElementById("errorbox1").innerHTML =
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