let a = 6;
let str = "";
for (let i = 1; i <= a; i++) {
  for (let j = 0; j < a - i; j++) {
    str += " ";
  }
  for (let k = 0; k < i; k++) {
    str += "*";
  }
  str +="\n";
}
for (let i = 1; i <= a - 1; i++) {
  for (let j = 0; j < i; j++) {
    str += " ";
  }
  for (let k = 0; k < a - i; k++) {
    str += "*";
  }
  str +="\n";
}
console.log(str);