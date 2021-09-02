function findlongestword(str) {
    var strSplit = str.split(' ');
    var longestword = 0;
    for ( var i =0 ; i < strSplit.length; i++) {
        if ( strSplit[i].length > longestword) {
            longestword = strSplit[i].length;
        }
    }
    return longestword;
} 
document.write(findlongestword ("I'm always happy with my family and friends"));