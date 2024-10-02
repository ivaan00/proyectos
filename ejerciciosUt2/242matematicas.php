<?php
declare(strict_types=1);
function digitos(int $num):int
{
    $numD=1;
    if($num!=0)
    {
        $numD=0;
        while($num>=1)
        {
            $num/=10;
            $numD++;
        }
    }
    return $numD;
}
echo digitos(34533);

function digitoN(int $num, int $pos): int
{
    if($pos<digitos($num))
    {
        for($i=digitos($num)-$pos;$i>0;$i--)
        {
            $num/=10;
        }
        $res=$num;
        
        $res%=10;
        return $res;
    }
    else{
        return 1;
    }
}
echo '<br>' . digitoN(73456,2);

function quitaPorDetras(int $num, int $cant): int|string
{
    if($cant<digitos($num)&&$cant>0)
    {
        for($i=0;$i<$cant;$i++)
        {
            $num/=10;
        }
        return (int)$num;
    }
    else{
        return 'Cantidad inválida';
    }
}
echo '<br>' . quitaPorDetras(1234,2);

function quitaPorDelante(int $num, int $cant): int|string
{
    if($cant<digitos($num)&&$cant>0)
    {
        $div=10**$cant;
        $num%=$div;
        return $num;
    }
    else
    {
        return 'Cantidad inválida';
    }
}
echo '<br>' . quitaPorDelante(1234, 3);
?>