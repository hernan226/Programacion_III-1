var frm;

window.addEventListener('load', inicializarManejadores);

function inicializarManejadores()
{
    frm = document.forms[0];
    // document.getElementsByTagName('form')[0];
    // document.getElementsById('frmAlta')[0];
    frm.addEventListener('submit', manejadorSubmit);
    //frm.onSubmit(){};
}
function manejadorSubmit(e)
{
    e.preventDefault();
    //console.log(e.target);
    let nuevaMascota=obtenerMascota(e.target);
    mascotas.push(nuevaMascota);
    document.getElementById("divTabla").appendChild(crearTabla(mascotas));
    
}
function obtenerMascota(frm){

    let nombre;
    let edad;
    let tipo;
    let vacunado;
    let desparacitado;
    let castrado;
    let aliento;

    for (elemento of frm.elements) {
       switch (elemento.name) {
           case "nombre":
               nombre = elemento.value;
               break;
           case "edad":
               edad = parseInt(elemento.value);
               break;
           case "tipo":
               if(elemento.checked){
                    tipo = elemento.value;
               }
               break;
           case "castrado":
                castrado = elemento.checked;
               break;
           case "vacunado":
                vacunado = elemento.checked;
               break;
           case "desparacitado":
                desparacitado = elemento.checked;
               break;
           case "alimento":
                alimento = elemento.value;
               break;
           default:
               break;
       }
    }

    console.log(frm.elements);
}











function operar(a,b,callback)
{
    return callback(a,b);
}
function sumar(a,b)
{
    return a+b;
}
function restar(a,b)
{
    return a-b;
}
/*
Datos de la mascota

Nombre:
Edad:

tipo
perro
gato
roedor

estado
castrado,vacunado,desparasitados

Alimento preferido (combo)
*/