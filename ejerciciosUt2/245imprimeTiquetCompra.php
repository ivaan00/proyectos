<?php
$cantidad=$_GET['cantidad'];

echo "<table border='1'><tr><td>Nombre: </td><td>Precio:</td></tr>";
$total=0;
for($i=0;$i<$cantidad;$i++)
{
    $nombre=$_GET["nombre$i"];
    $coste=$_GET["coste$i"];
    echo "<tr>
        <td>$nombre</td>
        <td>$coste</td></tr>";
        $total+=$coste;
}
echo "<tr><td>Total:</td><td>$coste</td></tr></table>"

?>