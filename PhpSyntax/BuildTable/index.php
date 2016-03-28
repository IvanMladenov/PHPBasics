<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Build Table</title>
        <style>
            th {
                background-color: orange;
                text-align: left;
                padding: 5px;
            }
            td {
                text-align: right;
                padding: 5px;
            }
            table, tr, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <?php
            function buildTable($name, $phoneNumber, $age, $address){
            echo '<table>';
            echo '<tr><th>Name</th><td>'.$name.'</td><tr>';
            echo '<tr><th>Phone</th><td>'.$phoneNumber.'</td><tr>';
            echo '<tr><th>Age</th><td>'.$age.'</td><tr>';
            echo '<tr><th>Address</th><td>'.$address.'</td><tr>';
            echo '</table>';
            }

            buildTable('Gosho', '088-98-74-15',37,  'bul. Hristo Botev 37A');
            buildTable('Pesho', '0884-888-888', 67,'Suhata Reka');
        ?>
    </body>
</html>
