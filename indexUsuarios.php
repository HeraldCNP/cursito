<?php
    include_once('conec.php');
    $query = 'SELECT * FROM users';
    $read = $conec->prepare($query);
    $read->execute();
    $users = $read->fetchAll();
    // var_dump($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <ul>
        <li><a href="registrarUsuario.php">Nuevo</a></li>
        <li><a href=""></a></li>
        <li><a href="">Atras</a></li>
    </ul>
        
    <table border="1">
    <thead>
        <tr>
            <th>Correo Electronico</th>
            <th>Contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['password'] ?></td>
                <td>
                    <a href="actualizarUser.php?id=<?php echo $user['id'] ?>">Editar</a>
                    <a href="deleteUser.php?id=<?php echo $user['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
        
    </table>
</body>
</html>