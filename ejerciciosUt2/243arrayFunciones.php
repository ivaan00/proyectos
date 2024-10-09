<?php 
    declare(strict_types=1);
    include_once("243biblioteca.php");

    if(isset($_GET['num1']) && isset($_GET['num2']))
    {
        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
        $func=$_GET['funcion'];
        echo $func($num1,$num2) . "<br>";
    }
    
   
    
?>