<?php
$aleatorios=[];
for($i=0;$i<33;$i++)
{
    $aleatorios[]=rand(0,100);
}
$mayor=0;
$menor=100;
$suma=0;
foreach($aleatorios as $num)
{
    if($num>$mayor)
    {
        $mayor=$num;
    }
    elseif($num<$menor)
    {
        $menor=$num;
    }
    $suma+=$num;
}
$suma/=count($aleatorios);
echo 'Media: ' . $suma . ' Mayor: ' . $mayor . ' Menor: ' . $menor;
?>