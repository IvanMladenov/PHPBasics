<?php
    if (isset($_POST['submit'])){
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $interestAmount = $_POST['interest-amount'];
        $period = $_POST['period'];
        $monthInterest = $interestAmount/12;
        
        $result = $amount;
        
        for ($i=0; $i<$period; $i++){
            $result = $result + $result*($monthInterest/100);
        }
        
        echo round($result, 2);
        echo ' '.$currency;
    }

