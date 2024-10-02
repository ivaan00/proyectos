<?php
if(isset($_GET['pregunta'])&&!empty($_GET['pregunta']))
{
    $respuestas=['Si','No','Quizás','Claro que sí','Por supuesto que no','No lo tengo claro',
    'Seguro','Yo diría que sí','Ni de coña'];
    $pregunta=$_GET['pregunta'];
    echo $pregunta . $respuestas[rand(0,count($respuestas)-1)];
}
?>