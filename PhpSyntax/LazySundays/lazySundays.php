<?php
    date_default_timezone_set('Europe/Sofia');
    
    $year = date('y');
    $month = date('m');
    
    $sundayDate = strtotime('first Sunday of ' . $month . $year);
    $sundays = [];
    
    while (date('m', $sundayDate)==$month){
        array_push($sundays, new DateTime(date('r', $sundayDate)));
        $sundayDate = strtotime('+7 days', $sundayDate);
    }
    
    foreach ($sundays as $sunday){
        echo $sunday->format('jS F, Y').'<br>';
    }
?>

    


