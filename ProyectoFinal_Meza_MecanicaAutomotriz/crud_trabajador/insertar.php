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

$sql="INSERT INTO `trabajador`(`id`, `Nombre del mecanico`, `Apellido del mecanico`, `Numero teléfono del mecanico`, `Correo del mecanico`, `Especialidad del mecanico`, `Direccion del mecanico`) VALUES ('[$id]','[$nombredelmecanico]','[$apellidodelmecanico]','[$numeroteléfonodelmecanico]','[$correodelmecanico]','[$especialidaddelmecanico]','[$direcciondelmecanico]')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: trabajador.php");
    
}else {
}
?>