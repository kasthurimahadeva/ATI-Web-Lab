function uppercase(str)
{
  var arr1 = str.split(' ');
  var arr2 = [];
    
  for(var x = 0; x < arr1.length; x++){
      arr2.push(arr1[x].charAt(0).toUpperCase()+arr1[x].slice(1));
  }
  return arr2.join(' ');
}
console.log(uppercase("have a nice day"));