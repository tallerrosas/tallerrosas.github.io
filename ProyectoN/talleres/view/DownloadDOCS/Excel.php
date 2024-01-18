<?php
header("Content-Type: appLication/xls");
header("Content-Disposition: attachment; filename= Regristro.xls");

?>

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