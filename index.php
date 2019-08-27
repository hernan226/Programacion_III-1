<?php
    //INCLUYENDO LIBRERIAS
    include 'funciones.php';
    require_once 'funciones.php';

    echo "Hola Index";
    /*Aplicación Nº 1 (Mostrar variables)
        Realizar un programa que guarde su nombre en $nombre y su apellido en $apellido . Luego
        mostrar el contenido de las variables con el siguiente formato: Pérez, Juan. 
        Utilizar el operador de concatenación.*/
        echo "<br> Ejercicio_01:";
        $nombre="Juan";
        $apellido="Perez";
        echo  "<br>Nombre: ",$nombre, " Apellido: ",$apellido;
        echo  "<br>".$nombre.", ".$apellido;
        echo "<br><br><br> Funcion:";
        saludar($nombre);

        /*
        Aplicación Nº 2 (Sumar dos números)
        Hacer un programa en PHP que sume el contenido de dos variables $x = -3 y $y = 15. 
        Mostrar el resultado final.
        */ 

?>
