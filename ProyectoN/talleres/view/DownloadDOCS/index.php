<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="row">
        <div class="col l10 offset-l1"> 
            <h5 class="grey-text">Tabla</h5>




        <table>
            <tr>
                <th>Id</th>

                <th>Placa</th>
                <th>Cliente</th>
                <th>Detalles</th>
                <th>Marca/Modelo</th>
                <th>Pago</th>
                <th>Fecha</th>

                <th>Color</th>
                
                
            </tr>

            <?php
            include ("conexion.php");
            $sql="SELECT * FROM vehiculo";
            $ejecutar=mysqli_query($conexion, $sql);
            while ($fila=mysqli_fetch_array($ejecutar)) {
            ?>

            <tr>
                <td><?php echo $fila[0] ?></td>

                <td><?php echo $fila[2] ?></td>
                <td><?php echo $fila[3] ?></td>
                <td><?php echo $fila[4] ?></td>
                <td><?php echo $fila[5] ?></td>
                <td><?php echo $fila[6] ?></td>
                <td><?php echo $fila[7] ?></td>

                <td><?php echo $fila[9] ?></td>
            </tr>

            <?php } ?>
        </table>

        <br>
        <a href="Excel.php">Descargar</a>

    </div>



</body>
</html>