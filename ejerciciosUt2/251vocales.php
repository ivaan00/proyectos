<?php
$frase=$_GET['frase'];
$vocales=['a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0];
for($i=0;$i<strlen($frase);$i++)
{
    if(array_key_exists(strtolower($frase[$i]),$vocales))
        $vocales[$frase[$i]]++;
}
$total=0;
foreach($vocales as $letra=>$count)
{
    echo $letra . $count . '<br>';
    $total+=$vocales[$letra];
}
echo 'Total: '. $total;
?>