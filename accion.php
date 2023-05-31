<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./accion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Crear</title>
</head>
<body>
    <?php
        if(isset($_POST['usu'])){
            $usuario = $_POST['usu'];
            setcookie("usuario", $usuario, time() + 3600);
        }

        if(isset($_POST['casa'])){
            $casa = $_POST['casa'];
            setcookie("casa", $casa, time() + 3600);
        }

        echo
            '<h1 id="titulo">¿Que quieres hacer <br> '.$_COOKIE['usuario'].'?</h1><br>';
    ?>
    <div class="quehacer">
        <form action="./crear.php" method="post" enctype="multipart/form-data" target="_self">
            <label>Accion:<br></label>
            <input type="radio" id="crea" name="grupo1" value='crear' required>
            <label id="arch1">Crear</label><br>
            <input type="radio" id="reno" name="grupo1" value='renombra' required>
            <label id="carp1">Renombrar</label><br>
            <input type="radio" id="elim" name="grupo1" value='eliminar' required>
            <label id="carp1">Eliminar</label><br><br>
            <button type="submit" href="./crear.php" id="boton" target="_blank">Aplicar</button><br>
            <a href="./registro.php">Registro</a>
       </form>
       <?php
        if($casa=='aj')
        {
            echo
            '</div><img src="https://static.nationalgeographicla.com/files/styles/image_3200/public/naturepl01132178.jpeg?w=1900&h=1887" alt="ajo" class="imagena">
            <div class="textoa"><strong>AJOLOTES</strong></div>';
        }
        if($casa=='ha')
        {
            echo
            '</div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Falco_peregrinus_tethered.jpg/1200px-Falco_peregrinus_tethered.jpg" alt="hal" class="imagena">
            <div class="textoh"><strong>HALCONES</strong></div>';
        }
        if($casa=='te')
        {
            echo
            '</div><img src="https://lasillarota.com/u/fotografias/m/2018/9/29/f638x638-154606_212773_5050.jpg" alt="hal" class="imagena">
            <div class="textot"><strong>TEPORINGO</strong></div>';
        }
        ?>
    </div>
</body>
</html>