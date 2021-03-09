<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>
    <div>
        <form action="createUser.php" method="POST">
            <label for="email">Correo Electronico</label>
            <input type="email" id="email" name="email">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>