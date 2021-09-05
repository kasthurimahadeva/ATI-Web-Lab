let str1="Word";
let str2="Excel";
function findPalindrome(input){
    if(input===input.split('').reverse().join('')){
        return "Palindrome;"
    }else{
        return"Not Palindrome";
    }
}
console.log(findPalindrome(str1))
VM418:10 Not Palindrome