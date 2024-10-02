<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 2px solid #000;
            text-align: center;
        }
        .azul{
            background-color: blue;
            color: white;
        }
        .naranja{
            background-color: orange;
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr class="azul">
            <td>x</td>
            <?php
                for($i=0;$i<=10;$i++) 
                {
                    echo "<td> $i </td>";
                        
                }?>
        </tr>
        <?php
            for($i=0;$i<=10;$i++)
            {
                echo'<tr><td class="naranja">' . $i . '</td>';
                for($o=0;$o<=10;$o++)
                {
                    echo '<td>' . $i * $o;
                }
                echo '</td></tr>';
            }
        ?>
    </table>
</body>
</html>