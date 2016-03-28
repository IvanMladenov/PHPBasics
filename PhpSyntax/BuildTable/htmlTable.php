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
?>