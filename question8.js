function chunkArrayInGroups(arr, size) {
    let result =[];

    for(let i=0; i<arr.length;i +=size){
      result.push(arr.slice(i,i + size));
    }
    return result;
  }

  console.log(chunkArrayInGroups(["k", "e", "t", "h", "u", "s", "a", "l", "i","n","i"], 2)); 