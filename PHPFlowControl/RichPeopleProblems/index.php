<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="get">
            <label for="input-cars">Enter cars</label>
            <input type="text" id="input-cars" name="cars">
            <button type="submit" name="submit">Show results</button>
        </form>
        <?php
            if (isset($_GET["submit"])&&$_GET["cars"]!='') {
                $text = $_GET["cars"];
                $cars = explode(",", $text);
                $colors = ['red', 'green', 'blue', 'black', 'white'];
                echo '<table><tr><th>Car</th><th>Color</th><th>Count</th></tr>';
                for($i=0; $i<count($cars); $i++){
                    $currentRnd = rand(0, count($colors)-1);
                    $currentColor = $colors[$currentRnd];
                    $numberOfCars = $currentRnd;
                    echo '<tr><td>'.trim($cars[$i]).'</td><td>'.$currentColor.'</td><td>'.$numberOfCars.'</td></tr>';
                }
                echo '</table>';
            }
        ?>
    </body>
</html>
