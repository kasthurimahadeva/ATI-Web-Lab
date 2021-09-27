function validatesignup()
{
    var fn = document.getElementById("fname").Value;
    var ln = document.getElementById("lname").Value;
    var un = document.getElementById("uname").Value;
    var em = document.getElementById("email").Value;
    var pwd = document.getElementById("password").Value;
    var cpwd= document.getElementById("conformpassword").Value;

    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9] {2,4})$/;

    if (fn,ln=='')
    {
        alert('please enter your first and lastname');
    }
    else if(!letters.test(fn,ln))
    {
        alert('Name field required only alphabet characters');
    }
    if(un=='')
    {
        alert('please enter your username');
    }
    else if(em=='')
    {
        alert('please enter your Email');
    }
    else if(!filter.test(em))
    {
        alert('Invalid email');
    }
    else if(pwd=='')
    {
        alert('please enter password');
    }
    else if(cpwd=='')
    {
        alert('Enter cnfirmpassword');
    }
    else if(pwd !=cpwd)
    {
        alert('password not matched');
    }
    else if(document.getElementById("password").value.length < 7)
    {
        alert('password minimum length is 7');
    }
    else if(document.getElementById("password").value.length > 12)
    {
        alert('password max length is 12');
    }
    else
    {
        alert('signup completed');
        window.location = "index.html";
    }
}