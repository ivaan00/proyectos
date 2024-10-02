<?php
declare(strict_types=1);
function mayor(): int
{
    $arrNum=func_get_args();
    $max=$arrNum[0];
    foreach($arrNum as $actual)
    $actual>$max?$max=$actual:false;
return $max;
}
echo mayor(-9,-103,-78,-5,-213,-12,-56,-3,-44,-5);

function concatenar(...$palabras) : string
{
    if(count(func_get_args())!=0)
    {
        $res='';
        foreach(func_get_args() as $actual)
        $res.= $actual . ' ';
    }
    return $res;
}
echo '<br>' . concatenar('Hola ',' buenos ','dias');
?>