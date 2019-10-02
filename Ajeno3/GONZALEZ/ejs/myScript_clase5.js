    
        var httpReq = new XMLHttpRequest();
        var listaJSON;
        var callBack_GET = function(){
            console.log("Llego info del servidor" + httpReq.readyState);

            if(httpReq.readyState==4)
            {
                if(httpReq.status==200)
                {//para mandar JSON en peticion post, cambiar el header (Content-type,'application')
                    //console.log(typeof(httpReq.responseText));
                    listaJSON = JSON.parse(httpReq.responseText);
                    console.log(httpReq.responseURL);
                    //console.log(httpReq.getResponseHeader);
                    document.getElementById("tabla").innerHTML = crearTabla(listaJSON);
                }
                else{            
                    alert("error en el servidor");
                    console.log(httpReq.responseText);
                }  
            }
        }
        window.onload = ajax('GET','http://localhost:3000/personas','standard');
        var callBack_POST = function(){
            console.log("Llego info del servidor" + httpReq.readyState);

            if(httpReq.readyState==4)
            {
                if(httpReq.status==200)
                {
                    listaJSON = JSON.parse(httpReq.responseText);
                    document.getElementById("tabla").innerHTML = crearTabla(listaJSON);
                }
                else{            
                    alert("error en el servidor");
                    console.log(httpReq.responseText);
                }  
            }
        }

function ajax(metodo, url, parametro){
            
            if(metodo=='GET'){
                httpReq.onreadystatechange=callBack_GET;
                httpReq.open(metodo,url+'?'+parametro,true);
                httpReq.send();
            }
            else if(metodo=='POST'){
                httpReq.onreadystatechange=callBack_POST;
                httpReq.open(metodo,url,true);
                httpReq.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                httpReq.send(parametro());
            }
}

function crearTabla(lista){
    tabla_string = "";
    tabla_string += "<th>NRO</th><th>Nombre</th><th>Apellido</th><th>Fecha</th><th>Telefono</th><th>Borrar</th>";
    for(contador=0, id=contador;contador<lista.length;contador++){
        if(lista[contador]==undefined) {
            id=contador-1;
            continue;
        }
        tabla_string += "<tr id='td_"+id+"'><td>"+contador+"</td><td>" +lista[contador].nombre+ "</td><td>" +lista[contador].apellido+ "</td> <td>";
        tabla_string += lista[contador].fecha+ "</td><td>" +lista[contador].telefono+ "</td><td><button value='Borrar' onclick='ajax('GET','http://localhost:3000/personas',"+contador+")'>Borrar</button></td></tr>";
    }
    return tabla_string;
}


function crearTablaConCabeceras(lista,cabeceras){
    var tabla_string = "";
    for(contador=0;contador<cabeceras.length;contador++){
        tabla_string += "<th>"+cabeceras[contador]+"</th>";
    }
    for(contador=0, id=contador;contador<lista.length;contador++){
        if(lista[contador]==undefined) {
            id=contador-1;
            continue;
        }
        tabla_string += "<tr id='td_"+id+"'><td>"+contador+"</td><td>" +lista[contador].nombre+ "</td><td>" +lista[contador].apellido+ "</td> <td>";
        tabla_string += lista[contador].fecha+ "</td><td>" +lista[contador].telefono+ "</td><td><button value='Borrar' onclick='ajax("+contador+")'>Borrar</button></td></tr>";
    }
    return tabla_string;
}

function getUserData(){
    string = "nombre=" +document.getElementById('usr').value + "&apellido=" + document.getElementById('password').value;
    string += "&fecha=" + document.getElementById('fech').value + "&telefono=" + document.getElementById('tel').value;
    return string;
}