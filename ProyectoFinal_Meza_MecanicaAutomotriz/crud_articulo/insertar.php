<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombredelarticulo=$_POST['Nombre del articulo'];
$preciodelarticulo=$_POST['Precio del articulo'];
$cantidaddelarticulo=$_POST['Cantidad del articulo'];
$departamentodelarticulo=$_POST['Departamento del articulo'];
$provedordelarticulo=$_POST['Provedor del articulo'];
$tipodearticulo=$_POST['Tipo de articulo'];

$sql="INSERT INTO `articulo`(`id`, `Nombre del articulo`, `Precio del articulo`, `Cantidad del articulo`, `Departamento del articulo`, `Provedor del articulo`, `Tipo de articulo`) VALUES ('[$id]','[$nombredelarticulo]','[$preciodelarticulo]','[$cantidaddelarticulo]','[$departamentodelarticulo]','[$provedordelarticulo]','[$tipodearticulo]')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulo.php");
    
}else {
}
?>