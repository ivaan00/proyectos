<?php 
$base=$_GET['base'];
$exponente=$_GET['exponente'];
$resultado=1;
for($i=0;$i<$exponente;$i++)
{
$resultado*=$base;
}
echo $resultado;
?>