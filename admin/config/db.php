<?php

$host="localhost";
$db="sitio";
$usuario="root";
$contrasena="";


try {

$conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$contrasena);

} catch (Exception $ex) {

echo $ex->getMessage();
}

?>