<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";

    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ARTICULO</title>
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
                                    <input type="text" class="form-control mb-3" name="Nombre del articulo" placeholder="Nombre del articulo">
                                    <input type="text" class="form-control mb-3" name="Precio del articulo" placeholder="Precio del articulo">
                                    <input type="text" class="form-control mb-3" name="Cantidad del articulo" placeholder="Cantidad del articulo">
                                    <input type="text" class="form-control mb-3" name="Departamento del articulo" placeholder="Departamento del articulo">
                                    <input type="text" class="form-control mb-3" name="Provedor del articulo" placeholder="Provedor del articulo">
                                    <input type="text" class="form-control mb-3" name="Tipo de articulo" placeholder="Tipo de articulo">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/ProyectoFinal_Meza_MecanicaAutomotriz/Index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre del articulo</th>
                                        <th>Precio del articulo</th>
                                        <th>Cantidad del articulo</th>
                                        <th>Departamento del articulo</th>
                                        <th>Provedor del articulo</th>
                                        <th>Tipo de articulo</th>
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
                                                <th><?php  echo $row['Nombre del articulo']?></th>
                                                <th><?php  echo $row['Precio del articulo']?></th>
                                                <th><?php  echo $row['Cantidad del articulo']?></th>   
                                                <th><?php  echo $row['Departamento del articulo']?></th> 
                                                <th><?php  echo $row['Provedor del articulo']?></th> 
                                                <th><?php  echo $row['Tipo de articulo']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['Precio del articulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Precio del articulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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