<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTE</title>
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
                                    <input type="text" class="form-control mb-3" name="Nombre del cliente" placeholder="Nombre del cliente">
                                    <input type="text" class="form-control mb-3" name="Apellido del cliente" placeholder="Apellido del cliente">
                                    <input type="text" class="form-control mb-3" name="Numero de cliente" placeholder="Numero de cliente">
                                    <input type="text" class="form-control mb-3" name="Numero del telefono del cliente" placeholder="Numero del telefono del cliente">
                                    <input type="text" class="form-control mb-3" name="Servicio requerido" placeholder="Servicio requerido">
                                    <input type="text" class="form-control mb-3" name="Correo del cliente" placeholder="Correo del cliente">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/ProyectoFinal_Meza_MecanicaAutomotriz/Index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre del cliente</th>
                                        <th>Apellido del cliente</th>
                                        <th>Numero de cliente</th>
                                        <th>Numero del telefono del cliente</th>
                                        <th>Servicio requerido</th>
                                        <th>Correo del cliente</th>
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
                                                <th><?php  echo $row['Nombre del cliente']?></th>
                                                <th><?php  echo $row['Apellido del cliente']?></th>
                                                <th><?php  echo $row['Numero de cliente']?></th>   
                                                <th><?php  echo $row['Numero del telefono del cliente']?></th> 
                                                <th><?php  echo $row['Servicio requerido']?></th>
                                                <th><?php  echo $row['Correo del cliente']?></th>
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