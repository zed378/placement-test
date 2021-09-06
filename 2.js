var myArray = [
    {urutan: 2, huruf: "u"},
    {urutan: 5, huruf: "W"},
    {urutan: 9, huruf: "d"},
    {urutan: 10, huruf: "o"},
    {urutan: 4, huruf: "b"},
    {urutan: 13, huruf: "d"},
    {urutan: 1, huruf: "D"},
    {urutan: 8, huruf: "s"},
    {urutan: 7, huruf: "y"},
    {urutan: 3, huruf: "m"},
    {urutan: 12, huruf: "i"},
    {urutan: 11, huruf: "t"},
    {urutan: 6, huruf: "a"}
];
      
function bubbleSort(a, param) {
    var swap;
    do {
        swap = false;
        for (var i = 0; i < a.length - 1; i++) {
            if (a[i][par] > a[i + 1][param]) {
                var temp = a[i];
                a[i] = a[i + 1];
                a[i + 1] = temp;
                swap = true;
            }
        }
    } while (swap);
}


bubbleSort(myArray, 'urutan');

for (i = 0; i < myArray.length; i++) {
    console.log(myArray[i]);
}