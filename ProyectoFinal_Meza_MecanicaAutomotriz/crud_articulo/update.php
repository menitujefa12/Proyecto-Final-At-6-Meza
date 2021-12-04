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

$sql="UPDATE `articulo` SET `id`='$id]',`Nombre del articulo`='[$nombredelarticulo]',`Precio del articulo`='[$preciodelarticulo]',`Cantidad del articulo`='[$cantidaddelarticulo]',`Departamento del articulo`='[$departamentodelarticulo]',`Provedor del articulo`='[$provedordelarticulo]',`Tipo de articulo`='[$tipodearticulo]' WHERE 1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulo.php");
    }
?>