function validateForm() {
    let r = document.forms["myForm"]["userName"].value;
    let x = document.forms["myForm"]["email"].value;
    let y = document.forms["myForm"]["password"].value;
    let z = document.forms["myForm"]["password-repeat"].value;

    if (r == "" ) {
      alert("user name filled is empty");
      return false;
    }
    if (x == "" ) {
        alert("email filled is empty");
        return false;
      }
      if (y == "" ) {
        alert("password filled is empty");
        return false;
      }
      if (z == "" ) {
        alert("repeat password filled is empty");
        return false;
      }
      
      
   
  }



  // function validateForm(){
  //   let password = document.forms["myForm"]["password"].value;
  //   let rep_password = document.forms["myForm"]["password-repeat"].value; 
  //   if(password==rep_password){
  //       alert("your password is correct");
  //       return false;
  //   }else{
  //       alert("your password must be same ");
  //       return false;
  //   }
  // }
 
 
