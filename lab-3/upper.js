function titleCase(str){
    var splitStr = str.toLowerCase().split(' ');
    for(var i=0; i < splitStr.length; i++){
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
    }
    return splitStr.join('');
}
document.write(titleCase("this is a small coding"));