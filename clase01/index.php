<?php
    //INCLUYENDO LIBRERIAS
    include 'funciones.php';
    require_once 'funciones.php';
    
    include 'Clases/alumno.php';

    echo "Hola Index";
    /*Aplicación Nº 1 (Mostrar variables)
        Realizar un programa que guarde su nombre en $nombre y su apellido en $apellido . Luego
        mostrar el contenido de las variables con el siguiente formato: Pérez, Juan. 
        Utilizar el operador de concatenación.*/
        /*echo "<br> Ejercicio_01:";
        $nombre="Juan";
        $apellido="Perez";
        echo  "<br>Nombre: ",$nombre, " Apellido: ",$apellido;
        echo  "<br>".$nombre.", ".$apellido;
        echo "<br><br><br> Funcion:";
        saludar($nombre);
        echo "<br><br><br> Objeto:";
        $variablePersona = new persona($nombre, 3333);
        echo "<br>Nombre de persona: <br>$variablePersona->nombre<br>";

        echo "<br><br> Funcion de objeto:";
        $variablePersona->Saludar();*/
        //-----------------------------------------------------------------
        echo "<br><br>-----------------------------<br><br> Alumno:";
        $variableAlumno = new Alumno("rodrigo","bravo", 333,33);
        echo "<br> Atributos:<br>";
        echo "Nombre: $variableAlumno->nombre <br> Legajo: $variableAlumno->legajo <br> Cuatri: $variableAlumno->cuatrimestre";

?>
