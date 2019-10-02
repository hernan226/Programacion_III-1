// var vec = [3,4,2,7,6,5];

// var dobles = [];

// for(var i=0; i < vec.length; i++)
// {
//     dobles.push(vec[i]*2);
// }

// vec.forEach((elemento)=>
// {
//     dobles.push(elemento*2);
// })

// var dobles = vec.map((valor)=>{
//     return valor*2;
// })

// var dobles = vec.map(valor=>valor*2);

// console.log(dobles);

//console.log(nombres);

// function cargarSelect()
// {
//     var select = document.getElementsByTagName('select')[0];
//     var nombres = empleados.map(function(empleado)
//     {
//         return empleado.nombre;
//     });

//     if(select.hasChildNodes())
//         return ;

//     nombres.forEach(function(nombre){
//         var opcion = document.createElement('option');
//         opcion.textContent = nombre;
//         select.appendChild(opcion);

//     });

// }

var x = empleados.map(function(e)
{
    return {"id":e.id, "email":e.email};
});

console.log(x);