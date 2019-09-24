<?php

echo "*****************ejercicio 1***********\n";
$nombre= "alejandro";
$apellido = "laborde";
echo $nombre . "\t" . $apellido . "\n" ;
echo "*****************ejercicio 2***********\n";
$x = -3; $y = 15;
echo ($x+$y);

echo "*****************ejercicio 3***********\n";

echo($x . "\n");
echo($y . "\n");
echo ($x+$y);
echo "\n***********EJERCICIOS DE ARRAY***********\n";
echo "*****************ejercicio 9  ***********\n";

$array_test= Array(rand(-10,10),rand(-10,10),rand(-10,10),rand(-10,10),rand(-10,10));

$iguales=0;
$menores=0;
$mayores=0;
foreach($array_test as $value){
    
    if($value==0){
        $iguales++;
    }
    if($value>0){
        $mayores++;
    }
    if($value<0){
        $menores++;
    }
}

printf("Menores : %f \n",($menores/sizeof($array_test)*100));
printf("iguales : %f \n",($iguales/sizeof($array_test)*100));
printf("mayores : %f \n",($mayores/sizeof($array_test)*100));








?>