<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario en php</h1>
    
    <form action="resivir.php" method="POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>

        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
        </p>

        <input type="submit" value="Enviar Datos" >
    </form>
</body>
</html>

