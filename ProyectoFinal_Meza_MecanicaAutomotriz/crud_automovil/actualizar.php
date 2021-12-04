<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM automovil WHERE id='$id'";
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
                                <input type="text" class="form-control mb-3" name="Modelo del automovil" placeholder="Modelo del automovil" value="<?php echo $row['Modelo del automovil']  ?>">
                                <input type="text" class="form-control mb-3" name="Marca del automovil" placeholder="Marca del automovil" value="<?php echo $row['Marca del automovil']  ?>">
                                <input type="text" class="form-control mb-3" name="Color del automovil" placeholder="Color del automovil" value="<?php echo $row['Color del automovil']  ?>">
                                <input type="text" class="form-control mb-3" name="Matricula del automovil" placeholder="Matricula del automovil" value="<?php echo $row['Matricula del automovil']  ?>">
                                <input type="text" class="form-control mb-3" name="Servicio mecanico" placeholder="Servicio mecanico" value="<?php echo $row['Servicio mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Tipo de automovil" placeholder="Tipo de automovil" value="<?php echo $row['Tipo de automovil']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>