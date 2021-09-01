function palindrome()
         {
             var x=document.getElementById("a").value;
             var y="";
             for (i=x.length-1;i>=0;i--)
             {
                 y=y+x[i];
             }
             if(x==y)
             document.getElementById("b").value=y+" is Palindrome";
             else
             document.getElementById("b").value=y+" Not a Palindrome";

          }