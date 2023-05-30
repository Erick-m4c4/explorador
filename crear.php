<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <?php
        $usuario = 'USUARIO';
        echo
            '<h1>Especifica que archivo vas a crear '.$usuario.'</h1><br>';
    ?>
    <div class="archcarp">
                <h2>¿Archivo o carpeta?</h2>
                <form action="./crear.php" method="post" enctype="multipart/form-data" target="_self">
                    <input type="radio" id="arch" name="grupo1" value=0 required>
                    <label>Archivo</label><br>
                    <input type="radio" id="carp" name="grupo1" value=1 required>
                <label>Carpeta</label><br><br>
                <label>Nombre del archivo o carpeta<br></label>
                <input type="text" id="nombrea" name="nombrea" placeholder="Ej. hola.txt, carpetachida" required>
                <button type="submit" id="boton" target="_blank">Enviar</button>
                </form>
    </div>
    <?php
        $nombrea = 'temporal';
        $carp = 'temporal';
        $nombrea = ( isset ($_POST["nombrea"]) && $_POST["nombrea"] != "" )? $_POST["nombrea"] : false;
        $carp = ( isset ($_POST["grupo1"]) && $_POST["grupo1"] != "" )? $_POST["grupo1"] : false;
        if($carp!=1){
                if(!file_exists($nombrea))
            {
                fopen($nombrea, 'w');
                $registro = 'Se creo el archivo '.$nombrea.' exitosamente';
            }
            else
            {
                echo 'El archivo ya existe, intenta con otro nombre';
            } 
        }
        else{
            if(!file_exists($nombrea)){
                mkdir($nombrea, 0777, true);
                $registro = 'Se creo la carpeta '.$nombrea;
            }
            else
            {
                echo 'Ya existe, intenta con otro nombre';
            }
        }
        echo $registro.'<br>';
    ?>
</body>
</html>