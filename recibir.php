<?php
$con=mysqli_connect('localhost','root','','clientes') or die('error en la conexion
con el servidor');
 $sql= "INSERT INTO datos
VALUES(null,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["direccion"]."'
,'".$_POST["email"]."','".$_POST["contraseña"]."')";
$resultado=mysqli_query($con,$sql) or die ('error en
el query db');
mysqli_close($con);

echo 'el nombre del socio es: '.$_POST["nombre"].'<br>';
echo 'el correo del socio es: '.$_POST["email"].'<br>';
echo 'la direccion del socio es: '.$_POST["direccion"].'<br>';


  ?>
