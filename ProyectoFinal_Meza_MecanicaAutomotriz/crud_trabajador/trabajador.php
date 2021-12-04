<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM trabajador";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA TRABAJADOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="Nombre del mecanico" placeholder="Nombre del mecanico">
                                    <input type="text" class="form-control mb-3" name="Apellido del mecanico" placeholder="Apellido del mecanico">
                                    <input type="text" class="form-control mb-3" name="Numero teléfono del mecanico" placeholder="Numero teléfono del mecanico">
                                    <input type="text" class="form-control mb-3" name="Correo del mecanico" placeholder="Correo del mecanico">
                                    <input type="text" class="form-control mb-3" name="Especialidad del mecanico" placeholder="Especialidad del mecanico">
                                    <input type="text" class="form-control mb-3" name="Direccion del mecanico" placeholder="Direccion del mecanico">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/ProyectoFinal_Meza_MecanicaAutomotriz/Index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre del mecanico</th>
                                        <th>Apellido del mecanico</th>
                                        <th>Numero teléfono del mecanico</th>
                                        <th>Correo del mecanico</th>
                                        <th>Especialidad del mecanico</th>
                                        <th>Direccion del mecanico</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['Nombre del mecanico<']?></th>
                                                <th><?php  echo $row['Apellido del mecanico']?></th>
                                                <th><?php  echo $row['Numero teléfono del mecanico']?></th>   
                                                <th><?php  echo $row['Correo del mecanico']?></th> 
                                                <th><?php  echo $row['Especialidad del mecanico']?></th> 
                                                <th><?php  echo $row['Direccion del mecanico']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Especialidad del mecanico'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Especialidad del mecanico'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>