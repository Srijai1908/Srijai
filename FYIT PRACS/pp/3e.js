var str=prompt("Enter the sentence");
var count=0;

for(i=0;i<str.length;i++){

    if (str.charAt(i,1)==" " && str.charAt(i+1,1)!==" ")
    count++;


}
document.write("Number of words are ="+(count+1))