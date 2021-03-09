<?php
    include_once('conec.php');
    if($_GET['id']){
        $id = $_GET['id'];
        $query = 'SELECT * FROM users WHERE id=?';
        $list = $conec->prepare($query);
        $list->execute(array($id));
        $user = $list->fetch();
        // var_dump($user);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar usuario</title>
</head>
<body>
    <div>
        <form action="updateUser.php" method="POST">
            <label for="email">Correo Electronico</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>">
            <label for="password">Contraseña</label>
            <input type="text" id="password" name="password" value="<?php echo $user['password'] ?>">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>