function chunkArrayInGroups(arr, size) {
    let result =[];

    for(let i=0; i<arr.length;i +=size){
      result.push(arr.slice(i,i + size));
    }
    return result;
  }

  console.log(chunkArrayInGroups(["k", "a", "j", "a","n","i"], 3));  
