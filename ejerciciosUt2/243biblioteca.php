<?php
declare(strict_types=1);
function sumar(...$entrada):float
{
    $resultado=0;
    foreach($entrada as $valor)
    {
        $resultado+=$valor;
    }
    return $resultado; 
}

function restar($num1=0,$num2=0):float
{
    return $num1-$num2; 
}

function multiplicar($num1,$num2):float
{
    return $num1*$num2; 
}

function dividir($num1,$num2=1):float
{
    return $num1/$num2; 
}
?>