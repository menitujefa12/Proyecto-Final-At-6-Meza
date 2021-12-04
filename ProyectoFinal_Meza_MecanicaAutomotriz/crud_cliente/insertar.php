<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombredelcliente=$_POST['Nombre del cliente'];
$apellidodelcliente=$_POST['Apellido del cliente'];
$numerodecliente=$_POST['Numero de cliente'];
$numerodeltelefonodelcliente=$_POST['Numero del telefono del cliente'];
$serviciorequerido=$_POST['Servicio requerido'];
$correodelcliente=$_POST['Correo del cliente'];

$sql="INSERT INTO `cliente`(`id`, `Nombre del cliente`, `Apellido del cliente`, `Numero de cliente`, `Numero del telefono del cliente`, `Servicio requerido`, `Correo del cliente`) VALUES ('[$id]','[$nombredelcliente]','[$apellidodelcliente]','$numerodecliente','[$numerodeltelefonodelcliente]','[$serviciorequerido]','[$correodelcliente]')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>