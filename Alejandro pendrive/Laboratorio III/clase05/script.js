
function validaTexto(){
    //document.getElementById("boton").onclick=saluda;
    console.log(document.getElementById("txtTitulo").value);
}

function saluda(){
    alert("VAMOOOOOOOSSS, FUNCIONO LPM");
}

function validaPrecio(){
    var precio=document.getElementById("precio");
        if( !isNaN(precio.value) & precio.value>0){
           
        }else 
        {
            alert("el precio ingresado es incorrecto");
        }
    
}




function publicacion(titulo,descripcion,tipoOperacion,precio,dormitorios,baños,cocheras){
    this.titulo=titulo;
    this.descripcion=descripcion;
    this.operacion=tipoOperacion;
    this.precio=precio;
    this.dormitorios=dormitorios;
    this.baños= baños;
    this.cocheras=cocheras;

}

function getFormulario(){
    var titulo= document.getElementById("txtTitulo").value;
    var descripcion= document.getElementById("txtDescripcion").value;

    var tipoOperacion;
    var ele = document.getElementsByName('Operacion'); 
    for(i = 0; i < ele.length; i++) { 
        if(ele[i].checked) 
        tipoOperacion=ele[i].value; 
    } 
    
    var precio= document.getElementById("precio").value;
    var dormitorios= document.getElementById("txtDormitorio").value;
    var baños= document.getElementById("txtBaño").value;
    var cocheras= document.getElementById("txtCochera").value;

    var publicacionNueva= new publicacion(titulo,descripcion,tipoOperacion,precio,dormitorios,baños,cocheras);
    
    console.log(publicacionNueva);
   
}



function displayRadioValue() { 

    
} 