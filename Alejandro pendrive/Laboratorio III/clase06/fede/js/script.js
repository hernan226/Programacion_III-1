var frm;

window.addEventListener("load", inicializarManejadores);

function inicializarManejadores(){
    frm = document.forms[0];
    frm.addEventListener('submit',function(e){
        e.preventDefault();
        let nuevaMascota = obtenerMascota(e.target);
        console.log(nuevaMascota);
        console.log(nuevaMascota.toString());
    })

}
function obtenerMascota(frm){
    let nombre;
    let edad;
    let tipo;
    let desparasitado;
    let vacunado;
    let castrado;
    let alimento;

    for ( elements of frm.elements){
        switch (elements.name){
            case "nombre":
                nombre = elements.value;
                break;
            case "edad":
                edad= parseInt(elements.value);
                break;
            case "tipo":
                if (elements.checked)
                    tipo= elements.value;
                break;
            case "castrado":
                castrado= elements.checked;
                break;
            case "vacunado":
                vacunado= elements.checked;
                break;
            case "desparasitado":
                desparasitado= elements.checked;
                break;
            case "alimento":
                alimento = elements.value;
                break;
        }
    }
    return new Mascota(nombre,edad,tipo,castrado,vacunado,desparasitado,alimento);
 
}