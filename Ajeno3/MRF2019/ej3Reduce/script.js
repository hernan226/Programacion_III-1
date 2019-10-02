var vec = [3,4,2,6,7,5];


// var suma = 0;

// for(var i = 0; i < vec.length; i++)
// {
//     suma += vec[i];
// }

// console.log(suma);

var suma = vec.reduce(function(anterior, actual, indice)
{
    return anterior + actual;
},0);

console.log(suma);



