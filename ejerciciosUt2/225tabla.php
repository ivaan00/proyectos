<?php 
if(isset($_GET["columnas"]) && !empty($_GET["columnas"]) && isset($_GET["filas"]) && !empty($_GET["filas"]))
{
    $columnas=$_GET["columnas"];
    $filas=$_GET["filas"];
    echo '<table border="1">';
    for($i=0;$i<$columnas;$i++)
    {
        echo'<tr>';
        for($j=0;$j<$filas;$j++)
        {
            echo'<td>' .  $i . ',' . $j . '</td>';
        }
        echo'</tr>';
    }
    echo '</table>';
}
else{
    echo 'Faltan variables';
}
?>