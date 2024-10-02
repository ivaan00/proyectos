<?php
declare(strict_types=1);
function esPar(int $num):bool
{
    return $num%2==0;
}

echo esPar(23)?'Es par<br>':'No es par<br>';

function arrayAleatorio(int $tam, int $min, int $max):array
{
    $nuevo=[];
    for($i=0;$i<$tam;$i++)
    {
        $nuevo[]= rand($min,$max);
    }
    return $nuevo;
}


$nuevo=arrayAleatorio(6,0,99);
foreach($nuevo as $actual)
echo $actual . ' ';

function arrayPares(array &$arr):int
{
    $n=0;
    foreach($arr as $actual)
    {
        if($actual%2==0)
        {
            $n++;
        }
    }
    return $n;
}
$num=arrayAleatorio(6,0,99);
echo '<br>' .  arrayPares($num);
?>