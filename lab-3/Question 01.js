function checkPalindrome( str )
    {
      let c = str.length -1;
      for( let i = 0 ; i < c/2 ;i++)
      {
        let x = str[i] ;
        let y = str[c-i];
        if( x != y)
        {
          return false;
        }
      }
      return true;
    }
    function isPalindrome( str )
    {
      let ans = checkPalindrome(str);
      if( ans == true )
      {
        console.log("This string is a palindrome ");
      }
      else
      {
        console.log("This string not a palindrome");
      }
    }
    let check1 = "madam";
    let check2 = "cat";
    isPalindrome(check1);
    isPalindrome(check2);