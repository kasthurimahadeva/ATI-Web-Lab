function bouncer(arr) {
    return arr.filter(elem => Boolean(elem));;
  }
  
  bouncer([7, "ate", "", false, 9]);