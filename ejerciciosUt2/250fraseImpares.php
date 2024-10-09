<?php
$frase=$_GET['frase'];
$nueva="";
for($i=1;$i<strlen($frase);$i+=2)
{
$nueva.=$frase[$i];
}
echo $nueva;
?>