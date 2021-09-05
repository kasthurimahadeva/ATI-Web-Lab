function bouncer(arr) {
    return arr.filter(Boolean);
  }

  console.log(bouncer([null, NaN, 1, 2, undefined]));