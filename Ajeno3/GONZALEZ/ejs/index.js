var express =require("express");
var cors = require("cors");
var corsOptions = {origin:"*",optionSucessStatus:200};
var app = express();
var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());

app.use(cors(corsOptions));

var personas=require('./MOCK_DATA.json');

function BorrarPersona(index){
    var concatena = "";
    var objetoSacado = personas.splice(index,1);
    return objetoSacado;
}

app.get("/personas",function(req,res){
    /*if(req.query.num_fila!='standard'){
        //BorrarPersona(num_fila);
        console.log("Estoy en 'BorrarPersona' del servidor");
        //res.send(BorrarPersona(req.query.num_fila));
        var retorno = BorrarPersona(req.query.num_fila);
        res.send(personas);
    } 
    else{*/
        console.log("Query is empty. Query: "+req.query.num_fila);
        res.send(personas); //personas
    //}  
});


app.post("/nuevaPersona",function(req,res){
    setTimeout(function(){
        console.log("Llego al servidor "+JSON.stringify(req.body));
        console.log((req.body.nombre!= undefined &&req.body.nombre!= "") );
       
        if((req.body.nombre!= undefined&&req.body.nombre!= "") &&(req.body.apellido!= undefined&&req.body.nombre!= "") &&  (req.body.telefono!= undefined&&req.body.telefono!= "") && (req.body.fecha!= undefined&&req.body.fecha!= "")){
            
                console.log("Sale del servidor "+"{'respuesta': 'ok'}");
                personas.push(req.body);
                res.send(personas);
                //res.send({'respuesta': 'ok'});    
            
            return;
        }
        console.log("Sale del servidor "+"{'respuesta': 'error'}")
        res.send({'respuesta': 'error'});
        /*var persona = {
            nombre: req.body.usr,
            apellido: req.body.pass,
            fecha: req.body.fecha,
            telefono: req.body.telefono
        };
        console.log(persona.nombre);
        //personas.push(persona);
        res.send(persona);*/
    },2000);
    
});



app.listen(3000,function(){
    console.log("Api en el puerto 3000");
});