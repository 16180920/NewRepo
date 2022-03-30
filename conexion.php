<?php 
 	//$conexion = mysqli_connect("localhost","root", "","proyecto");
	$conexion = new mysqli("localhost","root","12345678","tiendadeportiva");
 	if ($conexion -> connect_error) {
 		echo "no hay conexion";
 	}
 ?>
