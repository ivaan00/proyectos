<?php
$cantidad=1283;
$moneda=[
    500 => 0,
    200 => 0, 
    100 => 0,
    50 => 0, 
    20 => 0, 
    10 => 0, 
    5 => 0, 
    2 => 0, 
    1 => 0
];
$total=$cantidad;

foreach($moneda as $clave => $valor)
{
    while($total>=$clave)
    {
        $moneda[$clave]++;
        $total-=$clave;
    }
}
echo '<ul><li>' . $cantidad . ':</li>';
foreach($moneda as $actual => $num)
{
    if($num>0)
    {
    echo '<li>' . $actual . ' ' . $num . '</li>';
    }
}
echo '</ul>';
?>