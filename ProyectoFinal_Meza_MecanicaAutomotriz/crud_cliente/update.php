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

$sql="UPDATE `cliente` SET `id`='[$id]',`Nombre del cliente`='[$nombredelcliente]',`Apellido del cliente`='[$apellidodelcliente]',`Numero de cliente`='[$numerodecliente]',`Numero del telefono del cliente`='[$numerodeltelefonodelcliente]',`Servicio requerido`='[$serviciorequerido]',`Correo del cliente`='[$correodelcliente]' WHERE 1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>