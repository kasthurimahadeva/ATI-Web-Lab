function find_longest_word(str)
{
    var arr1=str.match(/\w[a-z]{0,}/gi);
    var result=arr1[0];
for(var x=1;x<arr1.length;x++)
{
    if(result.length<arr1[x].length)
    {
        result=arr1[x];
    }
}
return result;
}
console.log(find_longest_word('hellow miss world'))
VM441:14 hellow