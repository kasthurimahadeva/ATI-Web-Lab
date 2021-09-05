function chunkArrayInGroups(arr, size) {
  var result = [];
  
 for (var i=0; i<arr.length; i += size ){
   result.push(arr.slice(i, i + size));
 }
  return result;
}

console.log(chunkArrayInGroups(["a", "b", "c", "d"], 2));
console.log(chunkArrayInGroups(["D", "i", "l", "u", "S", "h", "a", "N"], 4));
