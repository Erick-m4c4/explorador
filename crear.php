<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./crear.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <title>Crear</title>
</head>
<body>
    <?php
        
        // $accion = ( isset ($_POST["grupo1"]) && $_POST["grupo1"] != "" )? $_POST["grupo1"] : false;
        if(isset($_POST['grupo1'])){
            $accion = $_POST['grupo1'];
            setcookie("accion", $accion, time() + 3600);
        }
       
        if($accion=='crear'){
            echo
               '<h1 id="titulo">¿Que quieres crear <br> '.$_COOKIE['usuario'].'?</h1><br>
                <div class="archcarp">
                <form action="./registro.php" method="post" enctype="multipart/form-data" target="_self">
                   <input type="radio" id="arch" name="grupo1" value=0 required>
                   <label id="arch1">Archivo</label>
                    <input type="radio" id="carp" name="grupo1" value=1 required>
                    <label id="carp1">Carpeta</label><br><br>
                    <label id="nmb"><strong>Nombre del archivo o <br>carpeta:</strong><br></label>
                    <input type="text" id="nombrea" name="nombrea" placeholder="Ej. hola.txt, carpetachida" required>
                    <button type="submit" id="boton" target="_blank">Aplicar</button>
                </form>
            </div>';
        }
        if($accion=='renombra'){
            echo
            '<h1 id="titulo">¿Que archivo quieres<br>renombrar '.$_COOKIE['usuario'].'?</h1><br>
                <div class="archcarp">
                <form action="./registro.php" method="post" enctype="multipart/form-data" target="_self">
                   <label id="nma"><strong>Nombre actual del archivo</strong><br></label>
                    <input type="text" id="nombrea" name="nombren" placeholder="Nuevo" required>
                    <label id="nmb"><strong>Nuevo nombre:</strong><br></label>
                    <input type="text" id="nombren" name="nombrea" placeholder="Actula" required>
                    <button type="submit" id="boton" target="_blank">Aplicar</button>
                </form>
            </div>';
        }
        if($accion=='eliminar'){
            echo
            '<h1 id="titulo">¿Que quieres eliminar <br> '.$_COOKIE['usuario'].'?</h1><br>
                 <div class="archcarp">
                <form action="./registro.php" method="post" enctype="multipart/form-data" target="_self">
                    <label id="nmb"><strong>Nombre del archivo a eliminar</strong><br></label>
                    <input type="text" id="nombrea" name="nombrea" placeholder="Ej. hola.txt, carpetachida" required>
                    <button type="submit" id="boton" target="_blank">Aplicar</button>
                </form>
            </div>';
        }
    ?>
</body>
</html>