function validate()
{
    var username= document.getElementById("username").value;
    var password= document.getElementById("password").value;
    if(username == null || username=="")
    {
        alert ("Name can't be blank");
        return false;
    }
    else if(password.length<8)
    {
        alert ("Password must be at least 8 characters long");
        return false;
    }
    
}