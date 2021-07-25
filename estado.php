<?php
    $conexion=mysqli_connect('localhost','root','','proyectopin2');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Ubicacion</td>
            <td>Estado</td>
        </tr>
        <?php
            $estado = "Encendido";
            $identi = "1";
            $query = mysqli_query($conexion, "SELECT * FROM bombillos WHERE estado = '$identi'");
            if ($query) {
                while ($row = $query->fetch_array()) {        
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['ubicacion']?></td>
            <td><?php echo $estado?></td>
        </tr>
        <?php
        }
    }
    ?>           
    </table>
</body>
</html>