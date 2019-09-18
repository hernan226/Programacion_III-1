function crearTabla(array)
{
    //crearTabla(mascotas);
    var tabla=document.getElementById("tabla");
    tabla.setAttribute('border', '1px solid black');
    tabla.setAttribute('style','border-collapse');
    tabla.setAttribute('width','700px');
    
    //tabla.className='tabla'; (y esto se manda al css)
    //tabla.classList.add(); agregar lista de clases

    let cabecera = document.createElement("tr");
    
    for (atributo in array[0]) {
        let th = document.createElement("th");
        th.textContent = atributo;
        cabecera.appendChild(th);
    }
    tabla.appendChild(cabecera);
    console.log(tabla);
}

