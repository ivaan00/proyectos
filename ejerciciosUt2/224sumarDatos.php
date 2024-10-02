<?php
$resultado=0;
$i=0;

while(isset($_GET["campo" . $i]))
{
    $resultado+=$_GET["campo" . $i];
    $i++;
}
echo $resultado;
?>