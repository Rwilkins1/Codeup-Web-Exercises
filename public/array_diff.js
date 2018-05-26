function array_diff(a, b) {
  for(var i in b) {
    var inA = in_array(a,b,i);
//     console.log(inA);
    while(inA >= 0) {
      console.log(inA)
      a.splice(inA, 1);
      inA = in_array(a,b,i);
    }
  }
  var returnArray = a;
//   returnArray.push(b);
  console.log(returnArray);
  return returnArray;
}

function in_array(a, b, i) {
  var result = a.indexOf(b[i]);
  console.log("Index of item from " + b[i] + "is " + result);
  return result;
}