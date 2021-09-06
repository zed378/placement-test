var prime = [];

for (var i = 1; i <= 300; i++) {
    var k = 0;
    for (var b = 1; b <= i; b++) {
        if (i % b == 0) {
            k++;
        }
    }
    if (k == 2) {
        prime.push(i);
    }
}

function bilang(a, b) {
    var c = a * b;
    var print = prime;
    print.length = c;
    while(print.length){
    console.log(print.splice(0, a));  
    } 
}

