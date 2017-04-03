<?php

include("conexion.php");

if(isset($_POST["cedula"])){

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$placa = $_POST["placa"];


$sentencia = "insert into reserva(nombre, apellidos, cedula, placa) values ('".$nombre."', '".$apellido."','".$cedula."','".$placa."')";

if (mysqli_query($conn, $sentencia)){
	echo "Se guardó ".$nombre;
} else {
    echo "Error: " . $sentencia	;
}

mysqli_close($conn);

}

?>