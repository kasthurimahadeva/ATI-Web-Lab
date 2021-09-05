const str='i can do this all day';

const strArray=str.split(' ');
const sortedStrArray=strArray.sort(
  (strA, strB) =>{
    return strB.length - strA.length;
  }
)
console.log(sortedStrArray[0]);
console.log(sortedStrArray[0].length);