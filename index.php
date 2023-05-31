<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 id="titulo">Inicio de sesion</h1>
    <div class="inicio">
        <h1>Bienvenido</h1>
        <form action="./accion.php" method="post" enctype="multipart/form-data" target="_self">
           <label id="nmb" name="nmb"><strong>Usuario:</strong><br></label>
            <input type="text" id="usu" name="usu" required><br>
            <label id="cas"><strong>Selecciona tu casa:</strong><br></label>
            <select name="casa" id="casa">
                <option value="aj">Ajolotes</option>
                <option value="ha">Halcones</option>
                <option value="te">Teporingos</option>
            </select>
        <br>
        <button type="submit"  href="./accion.php" id="boton" target="_blank">Entrar</button>
       </form>
    </div>
    <?php
        setcookie("registro", 0, time() + 3600);
    ?>
</body>
</html>