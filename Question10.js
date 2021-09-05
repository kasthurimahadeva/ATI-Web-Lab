function bouncer(arr) {
  function truthy(value) {
   return value;
   }

   var filtered = arr.filter(truthy);
   return filtered;
}

bouncer([7, "ate", "", false, 9]);