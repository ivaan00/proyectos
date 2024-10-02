<?php 
$base=2;
$exponente=4;
$resultado=1;
$expAbs = abs($exp);
while($expAbs>0)
{
    $resultado*=$base;
    $expAbs--;
}
echo $resultado;
?>