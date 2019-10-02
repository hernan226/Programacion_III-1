 var httpReq = new XMLHttpRequest();
        // mostrar una imagen que cargue mientras buscar respuesta el servidor
        // cambiar el css si la pass es incorrecta/correcta
        var callBack = function(){
            console.log("Llego info del servidor" + httpReq.readyState);
            if (httpReq.readyState==1) LogoCargandoLogin("show");
            if(httpReq.readyState==4)
            {
                if(httpReq.status==200)
                {
                    setTimeout(function(){LogoCargandoLogin('hide')},5000);
                    console.log(httpReq.responseText);
                    if(httpReq.responseText=='true'){
                        BuenaContraseña();
                    }
                    else{
                        MalaContraseña();
                    }
                }
                else
                {            
                    alert("error en el servidor");
                    console.log(httpReq.responseText);
                }  
            }
        }

        function LogoCargandoLogin(miParam){
            if(miParam=='show')
                document.getElementById('logo_cargando').className = "Mostrar";
            if(miParam=='hide'){
                //var ele = document.getElementById('logo_cargando');
                //document.body.removeChild(ele);
                document.getElementById('logo_cargando').className = "noMostrar";
            }
        }
        /*function ajax(metodo, url, parametros, tipo){

        }*/
        function ajax(){
            var miUsuario = document.getElementById("usr").value;
            var miContraseña = document.getElementById("password").value;
            httpReq.onreadystatechange=callBack;
            httpReq.open("GET","http://localhost:3000/loginUsuario?usr="+miUsuario+"&pass="+miContraseña,true);
            //httpReq.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            httpReq.send();
            
            /*if(miUsuario == "usuario" && miContraseña == "1234" ){
                //alert("success");
                if(httpReq.status <= 4){
                    var cuerpo = document.getElementById('body').innerHTML += "<img src='Loading_icon.gif'>";
                }
            }*/
        }
        function MalaContraseña(){
                document.getElementById("header_contraseña").style.color = "red";
                document.getElementById("password").style.color = "red";
                document.getElementById("password").style.outlineColor = "red";
                document.getElementById("password").style.outlineWidth = "0.1em";
                document.getElementById("password").style.outlineStyle = "solid";
                document.getElementById("mensaje_error_contraseña").className = "Mostrar";
            }
        function BuenaContraseña()
            {
                document.getElementById("header_contraseña").style.color = "black";
                document.getElementById("password").style.color = "black";
                document.getElementById("password").style.outlineColor = "black";
                document.getElementById("password").style.outlineWidth = "0.1em";
                document.getElementById("password").style.outlineStyle = "solid";
                document.getElementById("mensaje_error_contraseña").className = "noMostrar";
            }