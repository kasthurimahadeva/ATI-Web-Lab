function check_longest_word(str)
{
  var arr1 = str.match(/\w[a-z]{0,}/gi);
  var output = arr1[0];

  for(var x = 1 ; x < arr1.length ; x++)
  {
    if(output.length < arr1[x].length)
    {
    output = arr1[x];
    } 
  }
  return output;
}
console.log(check_longest_word("I am waiting for you"));