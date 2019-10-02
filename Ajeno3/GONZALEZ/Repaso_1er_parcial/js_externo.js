function getUserData(){
    string = "correo=" +document.getElementById('correo').value + "&password=" + document.getElementById('password').value;
    return string;
}
var httpReq = new XMLHttpRequest();

var callBack_POST = function(){
    console.log("Llego info del servidor" + httpReq.readyState);

    if(httpReq.readyState==4)
    {
        if(httpReq.status==200)
        {
            //listaJSON = JSON.parse(httpReq.responseText);
            console.log(httpReq.responseText)
            //document.getElementById("tabla").innerHTML = crearTabla(listaJSON);
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
        httpReq.setRequestHeader("Content-Type","x-www-form-urlencoded");
        var correo_1 = document.getElementById('correo').value;
        var password_1 = document.getElementById('password').value;
        var a = {
            correo:correo_1,
            password:password_1
        };
        console.log(a.correo+a.password);
        console.log(JSON.stringify(a));
        //string = "{correo:"+document.getElementById('correo').value+",password:"+password:document.getElementById('password').value+"}";
        httpReq.send(JSON.parse(JSON.stringify(a)));
    }
    //x-www-form-urlencoded
}

