function validateSignup()
{
    var fn = document.getElementById("fname").value;
    var ln = document.getElementById("lname").value;
    var un = document.getElementById("uname").value;
    var em = document.getElementById("email").value;
    var pwd = document.getElementById("password").value;           
    var cpwd = document.getElementById("cpassword").value;
    
    //expression code
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(fn,ln=='')
    {
        alert('Please enter your First and Lastname');
    }
    else if(!letters.test(fn,ln))
    {
        alert('Name field required only alphabet characters');
    }
    if(un=='')
    {
        alert('Please enter your Username');
    }
    else if(em=='')
    {
        alert('Please enter your Email');
    }
    else if (!filter.test(em))
    {
        alert('Invalid email!');
    }
    else if(pwd=='')
    {
        alert('Please enter Password');
    }
    else if(cpwd=='')
    {
        alert('Enter Confirm Password');
    }
    else if(!pwd_expression.test(pwd))
    {
        alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
    }
    else if(pwd != cpwd)
    {
        alert ('Password not Matched');
    }
    else if(document.getElementById("password").value.length < 8)
    {
        alert ('Password minimum length is 8');
    }
    else if(document.getElementById("password").value.length > 12)
    {
        alert ('Password max length is 12');
    }
    else
    {                                           
           alert('SignUp Completed!');
           window.location = "index.html"; 
    }
}