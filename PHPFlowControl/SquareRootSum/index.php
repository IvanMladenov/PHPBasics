<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Square root sum</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <td>Number</td>
                    <td>Square</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sum = 0;
                    for($i=0; $i<=100; $i+=2){
                        $sum+=sqrt($i);
                        echo '<tr><td>'.$i.'</td><td>'.  round(sqrt($i), 2).'</td></tr>';
                    }
                    echo '<tr><th>Total:</th><td>'.  round($sum,2).'</td></tr>';
                ?>
            </tbody>
        </table>
    </body>
</html>
