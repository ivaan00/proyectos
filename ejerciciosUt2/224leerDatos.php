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
    $cantidad=$_GET["cantidad"];
        echo '<form action="224sumarDatos.php" method="GET">';
            for($i=0;$i<$cantidad;$i++)
            {
                echo '<input type="number" name="campo' . $i . '"><br>
                <br>';
            }
        echo '
        <input type="submit" value="enviar"> </form>';
    ?>
</body>
</html>
