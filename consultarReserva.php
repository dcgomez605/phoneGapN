<?php

include("conexion.php");




$sentencia = "select * from reserva";
$query = mysqli_query($conn, $sentencia);

if ($query){
	
	$cantidad = mysqli_num_rows($query);
	if($cantidad > 0){

		while($row = mysqli_fetch_array($query)){

			echo "<br/>Nombre: ". $row["nombre"]."";
			echo "<br/>Apellido: ". $row["apellidos"]."";
		}
	}



} else {
    echo "Error: " . $sentencia	;
}

mysqli_close($conn);



?>