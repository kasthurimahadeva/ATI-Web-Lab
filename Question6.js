function mutation(arr) {
  var word = arr[0].toLowerCase();
  var letterToFind = arr[1].toLowerCase();
  var correctLetters = 0;
  for (var i = 0; i < letterToFind.length; i++) {
    correctLetters += (word.indexOf(letterToFind[i]) != -1);
  }
  return (correctLetters === letterToFind.length);

} 

mutation(["hello", "hey"]);