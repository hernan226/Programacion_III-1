
function persona(nombre,apellido,edad){
    
    this.nombre=nombre;
    this.apellido=apellido;
    this.edad=edad;
    this.saludar = function(){
        return "hola " + this.nombre;
    }
};


var x=new persona("alejandro","laborde",24);
console.log( x.saludar());

x.altura= 1.80;
console.log(x);

var x2=new persona("alejandro","laborde",24);
persona.prototype.altura=1.50;

console.log(x2);

