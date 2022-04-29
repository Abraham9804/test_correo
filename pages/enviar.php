<?php 
	$destino="pacodelucia998@gmail.com";
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

	$contenido = "nombre: ".$nombre. "<br>"." telefono: ".$telefono."<br>"." mensaje: ".$mensaje;
	mail($destino, "Informacion de venta", $contenido);
	header("location:index.html");

?>