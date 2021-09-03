function frankenSplice(arr1, arr2, n) {
  let array2 = [...arr2];
  array2.splice(n,0, ...arr1);
  return array2;

}

frankenSplice([1, 2, 3], [4, 5, 6], 1);