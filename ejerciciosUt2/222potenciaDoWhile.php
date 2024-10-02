<?php 
$base=2;
$exponente=4;
$resultado=1;
$expAbs =$exp;

    if($exponente<0 && $exponente!=0)
    {
        $expAbs = abs($exp);
        do
        {  
            $resultado*=$base;
            $expAbs--;
        }
        while($expAbs>0)
    }else if($exponente>0 && $exponente!=0)
            {
                do{  
                    $resultado*=$base;
                    $expAbs++;
                }
                while($expAbs>0)
            }
               
     if($exponente<0)
     {
        $resultado/=1;
     }
    echo $resultado;


?>