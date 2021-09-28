function uppercase(str)
{
  var array = str.split(' ');
  var newarray = [];

  for(var x = 0; x < array.length; x++){
      newarray.push(array[x].charAt(0).toUpperCase()+array[x].slice(1));
  }
  return newarray.join(' ');
}
console.log(uppercase("im your best friend"));  
console.log(uppercase("im kajani, studeid at ati jaffna."));  