window.addEventListener('load', asignarManejadores, false);

function asignarManejadores() {
    traerPersonas();
}


function traerPersonas() {
    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (this.readyState == XMLHttpRequest.DONE) {
            console.log('La solicitud fue hecha');
            if (this.status == 200) {
                
                anuncios = JSON.parse(xhr.responseText);
                console.log("anuncios " + anuncios);
            } else {
                console.log('personaspersonaspersonaspersonas');
                console.log("error: " + xhr.status);
            }

        }
    };
    xhr.open('GET', 'http://localhost:3001/traerAnuncios', true);
    xhr.send();
}