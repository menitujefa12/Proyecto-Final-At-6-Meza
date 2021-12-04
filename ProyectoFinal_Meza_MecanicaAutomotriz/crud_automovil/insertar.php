<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$modelodelautomovil=$_POST['Modelo del automovil'];
$marcadelautomovil=$_POST['Marca del automovil'];
$colordelautomovil=$_POST['Color del automovil'];
$matriculadelautomovil=$_POST['Matricula del automovil'];
$serviciomecanico=$_POST['Servicio mecanico'];
$tipodeautomovil=$_POST['Tipo de automovil'];

$sql="INSERT INTO `automovil`(`id`, `Modelo del automovil`, `Marca del automovil`, `Color del automovil`, `Matricula del automovil`, `Servicio mecanico`, `Tipo de automovil`) VALUES ('[$id]','[$modelodelautomovil]','[$marcadelautomovil]','[$colordelautomovil]','[$matriculadelautomovil]','[$serviciomecanico]','[$tipodeautomovil]')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: automovil.php");
    
}else {
}
?>