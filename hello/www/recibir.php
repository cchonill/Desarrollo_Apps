<?php

$nombre=$_POST['nomb'];
$apellido=$_POST['apll'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$peso=$_POST['peso'];
$altura=$_POST['altura'];
$cedula=$_POST['cedl'];




$IMC=$peso/($altura*$altura);

include "conexion.php";


$insertar=mysql_query("INSERT INTO IMC VALORES('".$nombre."',
'".$apellido."',
'".$edad."',
'".$sexo."',
'".$peso."',
'".$altura."',
'".$cedula."',
'".$IMC."')",$conexion);

if($insertar){

echo "Insertado con exito";

}else{
echo "Insertado fallido";

}

?>

