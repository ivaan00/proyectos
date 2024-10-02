<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="235alturas.php" method="GET">
        <?php
        $personas=[];
        $contador=0;
        while($contador<5){?>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <label for="altura">Altura:</label>
            <input type="number" name="altura" id="altura">
            <input type="submit" value="enviar">
            <?php  
                $contador++;
                if(isset($_GET["nombre"]) && !empty($_GET['altura']))
                {
                    $personas=[$_GET['nombre'] => $_GET['altura']];
                };
            }?>
    </form>
</body>
</html>