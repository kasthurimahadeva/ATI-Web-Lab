let str1= "MOM";
let str2= "Mother";
function findPalindrome (input){
    if(input===input.split('').reverse().join('')){
        return "Palindrome";
    }else {
        return "Not a Palindrome";
    }
}
console.log(findPalindrome(str1))



