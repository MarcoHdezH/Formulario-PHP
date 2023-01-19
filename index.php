<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>INE México</title>
</head>

<body>
    <header class="header">
        <h1>Instituto Nacional Electoral</h1>
        <img src="ine-logo.png">
    </header>

    <hr>

    <h3 class="header">Proporcione los siguientes Datos:</h3>

    <form class="header" action="registro.php" method="post">
        <label>INE (CURP)</label>
        <input class="logo-input" type="text" name="ID" required>
        <br><br>
        <h3>Seleccionar Voto</h3>
        <br>
        <div class="Partidos">
            <label><img class="imagen" src="PRI.png"> <input type="radio" name="partido" value="1" required>PRI<br></label>
            <label><img class="imagen" src="PAN.png"> <input type="radio" name="partido" value="2">PAN<br></label>
            <label><img class="imagen" src="PRD.png"> <input type="radio" name="partido" value="3">PRD<br></label>
            <label><img class="imagen" src="MORENA.png"> <input type="radio" name="partido" value="4">MORENA<br></label>
            <label><img class="imagen" src="NULO.webp"> <input type="radio" name="partido" value="5">ANULAR<br></label>
        </div>
        <br>
        <br>

        <input type="submit" name="enviar" value="Emitir Voto">

    </form>
</body>

</html>