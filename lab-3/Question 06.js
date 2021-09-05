function mutation(arr) {
    let bool;
    let firstWord = arr[0].toLowerCase();
    let secondWord = arr[1].toLowerCase().split('');
    for (let i = 0; i < secondWord.length; i++) {
      if (firstWord.indexOf(secondWord[i]) == -1) {
        bool = false;
        return bool;
      }
      else {
        bool = true;
      }
    }
    return bool;
  }
  
  mutation(["hello", "hey"]);