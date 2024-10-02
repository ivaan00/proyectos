<?php
$sex=[];
for($i=0;$i<100;$i++)
{
    $num=rand(1,2);
    if($num==1)
    {
        $sex[]='M';
    }
    else
    {
        $sex[]='F';
    }
}
$conteo=[
    'M'=> 0,
    'F'=> 0
];
foreach($sex as $actual)
{
    if($actual=='M')
    {
        $conteo['M']++;
    }
    else{
        $conteo['F']++;
    }
}
foreach($conteo as $actual => $num)
{
    echo $actual . ': ' . $num . ' ';
}
?>