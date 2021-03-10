<?php
include_once('../conec.php');

    $query = 'SELECT * FROM vehiculos';
    $select = $conec->prepare($query);
    $select->execute();
    $vehiculos = $select->fetchAll();
    //var_dump($vehiculos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="register.php">Nuevos</a></li>
    </ul>
    <table>
        <tr>
            <th>Modelo</th>       
            <th>Placa</th>       
            <th>Acciones</th>       
        </tr>
    <?php foreach ($vehiculos as $vehiculo) { ?>
        <tr>
            <td> <?php echo $vehiculo['modelo'] ?> </td>
            <td> <?php echo $vehiculo['placa'] ?> </td>
            <td>
            <a href="edit.php?id=<?php echo $vehiculo['id_vehiculo'] ?>">editar</a>
            <a href="delete.php?id=<?php echo $vehiculo['id_vehiculo'] ?>">Eliminar</a>
            
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>