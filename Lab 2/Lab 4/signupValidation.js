function validation(){
    var fname=document.forms["myform"]["uname"].value;
    var lname=document.forms["myform"]["lname"].value;
    var email=document.forms["myform"]["email"].value;
    var pass=document.forms["myform"]["pass"].value;
    var phonenumber=document.forms["myform"]["phonenumber"].value;
}
if(fname==null|| fname.value.length<10){
    printError("fnameErr","please enter your name")
    document.getElementById("errorBox").innerhtml="enter the user firstname";
    return false;
}  
if(lname==null ||lname.value.length<10 ){
    document.getElementById("errorBox").innerhtml="enter the lastname";
    return false;
} 
f(email==null || email.value.length<15 ){
    document.getElementById("errorBox").innerhtml="enter the email";
    return false;
} 

if(passname==null|| pass.value.length<10){
    document.getElementById("errorBox").innerhtml="enter the password";
    return false;
}  
if(phonenumber==null || phonenumber.value.length<10){
    document.getElementById("errorBox").innerhtml="enter the phonenumber";
    return false;
} 
if (fname !='' && email !=''&& pass !='' && phonenumber !=''  );
{
        
     alert("Register successfull");
}
  




