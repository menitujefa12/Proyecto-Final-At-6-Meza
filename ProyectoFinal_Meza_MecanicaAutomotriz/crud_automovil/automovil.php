<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM automovil";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA AUTOMOVIL</title>
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
                                    <input type="text" class="form-control mb-3" name="Modelo del automovil" placeholder="Modelo del automovil">
                                    <input type="text" class="form-control mb-3" name="Marca del automovil" placeholder="Marca del automovil">
                                    <input type="text" class="form-control mb-3" name="Color del automovil" placeholder="Color del automovil">
                                    <input type="text" class="form-control mb-3" name="Matricula del automovil" placeholder="Matricula del automovil">
                                    <input type="text" class="form-control mb-3" name="Servicio mecanico" placeholder="Servicio mecanico">
                                    <input type="text" class="form-control mb-3" name="Tipo de automovil" placeholder="Tipo de automovil">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/ProyectoFinal_Meza_MecanicaAutomotriz/Index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Modelo del automovil</th>
                                        <th>Marca del automovil</th>
                                        <th>Color del automovil</th>
                                        <th>Matricula del automovil</th>
                                        <th>Servicio mecanico</th>
                                        <th>Tipo de automovil</th>
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
                                                <th><?php  echo $row['Modelo del automovil']?></th>
                                                <th><?php  echo $row['Marca del automovil']?></th>
                                                <th><?php  echo $row['Color del automovil']?></th>   
                                                <th><?php  echo $row['Matricula del automovil']?></th> 
                                                <th><?php  echo $row['Servicio mecanico']?></th> 
                                                <th><?php  echo $row['Tipo de automovil']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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