<?php 
$aleatorios=[];
for($i=0;$i<50;$i++)
{
    $aleatorios[]=rand(0,99);
}

    echo '<ul>';
    for($i=0;$i<count($aleatorios);$i++)
    {
       echo '<li>' . $aleatorios[$i] . '</li>'; 
    }
    echo '</ul>';
?>