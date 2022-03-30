<?php 
 	//$conexion = mysqli_connect("localhost","root", "","proyecto");
	$conexion = new mysqli("localhost","root","","tiendadeportiva");
 	if ($conexion -> connect_error) {
 		echo "no hay conexion";
 	}
 ?>
