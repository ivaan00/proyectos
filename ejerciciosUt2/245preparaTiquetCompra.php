<?php
if(isset($_GET['cantidad']))
{
    $cantidad=$_GET['cantidad'];
    echo '<form action="245imprimeTiquetCompra.php" method="GET">';
    for($i=0;$i<$_GET['cantidad'];$i++)
    {
        echo '<label for="nombre">Nombre:' . $i . ' </label>
        <input type="text" id="nombre' . $i . '" name="nombre' . $i .'">
        <br>
        <label for="coste' . $i . '">Coste: ' . $i . ' </label>
        <input type="number' . $i . '" id="coste' . $i . '" name="coste' . $i . '">
        <br>
        <br>';
    }
    echo "<input type='hidden' id='$cantidad' name='cantidad' value='$cantidad'> <input type='submit' value='enviar'></form>";
}
?>