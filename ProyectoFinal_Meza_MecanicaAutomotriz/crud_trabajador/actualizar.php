<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM trabajador WHERE id='$id'";
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
                                <input type="text" class="form-control mb-3" name="Nombre del mecanico" placeholder="Nombre del mecanico" value="<?php echo $row['Nombre del mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido del mecanico" placeholder="Apellido del mecanico" value="<?php echo $row['Apellido del mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Numero teléfono del mecanico" placeholder="Numero teléfono del mecanico" value="<?php echo $row['Numero teléfono del mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo del mecanico" placeholder="Correo del mecanico" value="<?php echo $row['Correo del mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Especialidad del mecanico" placeholder="Especialidad del mecanico" value="<?php echo $row['Especialidad del mecanico']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion del mecanico" placeholder="Direccion del mecanico" value="<?php echo $row['Direccion del mecanico']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>