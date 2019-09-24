
<?php

class coneccionesDB{

//Conectar a la base de datos
	
$hostname="your_hostname";
$username="your_dbusername";
$password="your_dbpassword";
$dbname="your_dbusername";
$usertable="your_tablename";
$yourfield = "your_field";

mysql_connect($hostname,$username, $password) o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
mysql_select_db($dbname);

# Comprobar si existe registro

$query = “SELECCIONAR * DESDE $usertable”;

$result = mysql_query($query);

si($result){
    mientras que($row = mysql_fetch_array($result)){
        $name = $row["$yourfield"];
        echo "Nombre: ".$name."br/>";
    }
}






}

	





?>