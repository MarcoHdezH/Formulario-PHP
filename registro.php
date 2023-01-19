<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Histograma</title>
</head>

<body>
    <?php

    $fp = fopen("Archivo.txt", "a");

    echo '
    <header class="header">
        <h1>Instituto Nacional Electoral<br>Histograma</h1>
        <img src="ine-logo.png">
    </header>
    ';

    $id = $_REQUEST['ID'];
    $partido = $_REQUEST['partido'];

    fwrite($fp,"$id $partido\n");

    fclose($fp);

    $ft = fopen("Archivo.txt", "r");

    $PRI_VOTOS = 0;
    $PAN_VOTOS = 0;
    $PRD_VOTOS = 0;
    $MORENA_VOTOS = 0;
    $NULOS_VOTOS = 0;
    $Personas = 0;

    echo "<h2 class='header'>Lista de Personas Votantes</h2>";

    echo" 
    <div class='Partidos'>";

    while(!feof($ft)){
        $linea = fgets($ft);
        $partes = explode(" ",$linea);

        if($partes[0]==null){
            break;
        }
        
        echo "<p class='header'>$partes[0]</p>";

        $Personas = $Personas + 1;

        $partido = $partes[1];
            
        if( $partido == '1'){
            $PRI_VOTOS = $PRI_VOTOS + 1;
        }else{
            if( $partido == '2'){
                $PAN_VOTOS = $PAN_VOTOS + 1;
            }else{
                if( $partido == '3'){
                    $PRD_VOTOS = $PRD_VOTOS + 1;
                }else{
                    if( $partido == '4'){
                        $MORENA_VOTOS = $MORENA_VOTOS + 1;
                    }else{
                        $NULOS_VOTOS = $NULOS_VOTOS + 1;
                    }
                }
            }
        }
    }

    echo "</div>";

    echo "<h4 class='header'>Total de Votos Registrados: $Personas</h4>";

    echo"
        <h3 class='header'>Conteo de Votos</h3>
        <br>
        <div class='Partidos'>
            <label class='header'><img class='imagen' src='PRI.png'><br>$PRI_VOTOS<br></label>
            <label class='header'><img class='imagen' src='PAN.png'><br>$PAN_VOTOS<br></label>
            <label class='header'><img class='imagen' src='PRD.png'><br>$PRD_VOTOS<br></label>
            <label class='header'><img class='imagen' src='MORENA.png'><br>$MORENA_VOTOS<br></label>
            <label class='header'><img class='imagen' src='NULO.webp'><br>$NULOS_VOTOS<br></label>
        </div>
        <br>
    ";
    $PRI_VOTOS = 0;
    $PAN_VOTOS = 0;
    $PRD_VOTOS = 0;
    $MORENA_VOTOS = 0;
    $NULOS_VOTOS = 0;
    $Personas = 0;

    ?>
</body>

</html>