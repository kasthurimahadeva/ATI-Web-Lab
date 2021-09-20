function validate()
{
var username = document.login.username.value;
var password = document.login.password.value;
    
    sp=0;
        for(i=0; i<username.length; i++)
        {
            ch=username.charAt(i);
            if(ch=='')
            sp=1;
        }
        alphadigit=0;
        alpha = /[a-zA-Z]/;
        digit = /[0-9]/;
    if(password.match(alpha) && password.match(digit))
        alphadigit = 1;
    if(sp == 1)
    {
        alert("Please input username without space");
        return false;
    }
    else if(username==""||username.length<9)
    {
        alert("please input a valid username");
        return false;
    }
    else if(password==""||password.length<9)
    {
        alert("please input a valid password");
        return false;
    }
    else if(alphadigit == 0)
        {
            alert(" please enter atleast one alphabet and atleast one digit");
            return false;
        }
    else
    {
        alert("Successfull Validation");
        return true;
    }
    
    return true;
}