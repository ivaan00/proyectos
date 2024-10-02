<?php
$personas=['Alberto' => 1.78,
'Maria' => 1.60,
'Carlos' => 1.89,
'Jorge' => 1.72,
'Sara' => 1.55];
$media=0;
echo '<table><tr><td>Nombre:</td><td>Altura:</td></tr>';
foreach($personas as $nombre => $altura)
{
    echo '<tr><td>' . $nombre . '</td><td>' . $altura . '</td></tr>'; 
    $media+=$altura;
}
$media/=count($personas);
echo '<tr><td>Altura media:</td><td>' . $media . '</td></tr>';
echo '</table>';
?>