function spinalCase(str) {
  let camelCaseHandled = str.replace(/([a-z])([A-Z])/g, "$1 $2");
  let spacesAndDashesHandled = camelCaseHandled.replace(/\s|_/g, "-");
  return spacesAndDashesHandled.toLowerCase();
}

let result = spinalCase('My_Name_Is_Dilushan');
console.log(result);