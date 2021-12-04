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

$sql="UPDATE `automovil` SET `id`='[$id]',`Modelo del automovil`='[$modelodelautomovil]',`Marca del automovil`='[$marcadelautomovil]',`Color del automovil`='[$colordelautomovil]',`Matricula del automovil`='[$matriculadelautomovil]',`Servicio mecanico`='[$serviciomecanico]',`Tipo de automovil`='[$tipodeautomovil]' WHERE 1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: automovil.php");
    }
?>