<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$inicio=$_GET['inicio'];
$fin=$_GET['fin'];
if($inicio!=0)
    $inicio++;

    echo '<ul>';
    for($i=$inicio;$i<=$fin;$i+=2)
            echo '<li>'. $i . '</li>';

    echo'</ul>';
?>
</body>
</html>