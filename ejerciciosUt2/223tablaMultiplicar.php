<html>
    
    <head>
        <title>Document</title>
    </head>
    <body>
<?php
        echo'<table>
            <thead>
                <tr>
                <th>a * b =a*b</th>
                </tr>
            </thead>
            <tbody>';
            $numero=5;
            for($i=0;$i<=10;$i++)
            {
            echo'<tr><td>' . $numero . " por " . $i   . " = " . $numero*$i . '</td></tr>';
            } 
            echo'
            </tbody>
        </table>';
?>
    </body>
</html>


