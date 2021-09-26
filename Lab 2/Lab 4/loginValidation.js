function Submit(){
    if(username.value == 0 || username.value.length<10){
        document.getElementById('error').innerHtml ='Please fill the required fields!';
        return false;
    }else if (pass.value == 0|| pass.value.length<8){
        document.getElementById('error').innerHtml ='Please fill the required fields!';
        return false;
    }else{
        alert("Successfully login");
    }
    }

