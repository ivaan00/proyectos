<?php
$frase=$_GET['frase'];
$totalLetras=0;
for($i=0;$i<strlen($frase);$i++)
{
    if($frase[$i]!=' ')
    {
        $totalLetras++;
    }
}
$palabras=explode(' ',$frase);
echo "Total de letras: $totalLetras" . '<br>';
echo "Total de palabras: " . count($palabras). '<br>';
foreach($palabras as $actual)
{
    echo $actual ." ". strlen($actual) . '<br>';
}
?>