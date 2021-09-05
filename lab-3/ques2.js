function uppercase(str)
{
    var arr1=str.split('');
    var newarr1=[];
for(var x=0;x<arr1.length;x++){
newarr1.push(arr1[x].charAt(0).toUpperCase()+arr1[x].slice(1));
}
return newarr1.join('');
}
console.log(uppercase("Adope Premiere tutor"));
VM424:10 ADOPE PREMIERE TUTOR