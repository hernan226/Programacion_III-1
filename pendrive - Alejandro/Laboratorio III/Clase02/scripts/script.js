var btnSaludar;
    


window.addEventListener('load', function(){
    var btnSaludar= document.getElementById('btnSaludar');
    btnSaludar.addEventListener('click',saludar);
});

    function saludar(){
        alert("hola");
    }
    

    
    // btnSaludar.onclick= saludar();
    