<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // -------------------------------------------------      
    setcookie("registro", 0, time() + 3600);
    
    $n = $_COOKIE['registro']; 
    $n = 0;
        if($_COOKIE['accion']=='crear'){
            $nombrea = ( isset ($_POST["nombrea"]) && $_POST["nombrea"] != "" )? $_POST["nombrea"] : false;
            $carp = ( isset ($_POST["grupo1"]) && $_POST["grupo1"] != "" )? $_POST["grupo1"] : false;
            if($carp!=1){
                if(!file_exists($nombrea))
                {
                    fopen($nombrea, 'w');
                    $registro[$n] = 'Se creo el archivo '.$nombrea.' exitosamente';
                    echo $registro[$n].$n;
                    $n = $n+1;
                    setcookie("registro", $n, time() + 3600);
                }
                else
                {
                    echo 'El archivo ya existe, intenta con otro nombre';
                } 
            }
            else{
                if(!file_exists($nombrea)){
                    mkdir($nombrea, 0777, true);
                    echo $_COOKIE['registro'];
                    $registro[$n] = 'Se creo la carpeta '.$nombrea;
                    $n=$n+1;
                   $_COOKIE['registro'] = $n;
                    echo $_COOKIE['registro'];
                }
                else
                {
                    echo 'Ya existe, intenta con otro nombre';
                }
        }
        // echo $registro.'<br>';
        }
        if($_COOKIE['accion']=='renombra'){
            $nombrea = ( isset ($_POST["nombrea"]) && $_POST["nombrea"] != "" )? $_POST["nombrea"] : false;
            $nombren = ( isset ($_POST["nombren"]) && $_POST["nombren"] != "" )? $_POST["nombren"] : false;

            if(!file_exists($nombrea))
            {
                echo 'Archivo no encontrado';
            }
            else
            {
                rename($nombrea, $nombren);
                $registro[$n] = 'se renombro';
                $n++;
                setcookie("registro", $n, time() + 3600);
            }

        }
        if($_COOKIE['accion']=='eliminar'){

            $nombrea = ( isset ($_POST["nombrea"]) && $_POST["nombrea"] != "" )? $_POST["nombrea"] : false;

            if(!file_exists($nombrea))
            {
                echo 'Archivo no encontrado';
            }
            else
            {
                unlink($nombrea);
                echo 'se elimino';
            }
        }
    ?>
</body>
</html>