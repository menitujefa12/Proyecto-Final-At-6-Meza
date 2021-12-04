<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulo WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre del articulo" placeholder="Nombre del articulo" value="<?php echo $row['Nombre del articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Precio del articulo" placeholder="Precio del articulo" value="<?php echo $row['Precio del articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Cantidad del articulo" placeholder="Cantidad del articulo" value="<?php echo $row['Cantidad del articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Departamento del articulo" placeholder="Departamento del articulo" value="<?php echo $row['Departamento del articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Provedor del articulo" placeholder="Provedor del articulo" value="<?php echo $row['Provedor del articulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Tipo de articulo" placeholder="Tipo de articulo" value="<?php echo $row['Tipo de articulo']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>