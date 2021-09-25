function bouncer(arr) {
  return arr.filter(element => Boolean(element));;
}

bouncer([7, "ate", "", false, 9]);