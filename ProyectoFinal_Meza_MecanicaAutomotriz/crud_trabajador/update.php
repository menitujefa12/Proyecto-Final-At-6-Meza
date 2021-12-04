<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombredelmecanico=$_POST['Nombre del mecanico'];
$apellidodelmecanico=$_POST['Apellido del mecanico'];
$numeroteléfonodelmecanico=$_POST['Numero teléfono del mecanico'];
$correodelmecanico=$_POST['Correo del mecanico'];
$especialidaddelmecanico=$_POST['Especialidad del mecanico'];
$direcciondelmecanico=$_POST['Direccion del mecanico'];

$sql="UPDATE `trabajador` SET `id`='[$id]',`Nombre del mecanico`='[$nombredelmecanico]',`Apellido del mecanico`='[$apellidodelmecanico]',`Numero teléfono del mecanico`='[$numeroteléfonodelmecanic]',`Correo del mecanico`='[$correodelmecanico]',`Especialidad del mecanico`='[$especialidaddelmecanico]',`Direccion del mecanico`='[$direcciondelmecanico]' WHERE 1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: trabajador.php");
    }
?>