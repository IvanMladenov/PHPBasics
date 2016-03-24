<?php
    function printAllThreeDigitsNumberLessThan($number){
        if($number>999){
            $number=999;
        }
        
        $resultArr = [];
        
        for($i = 102; $i<=$number; $i++){
            $lastDigit = $i%10;
            $midleDigit = floor($i/10)%10;
            $firstDigit = floor($i/100);
            if($firstDigit!=$midleDigit&&$firstDigit!=$lastDigit&&$lastDigit!=$midleDigit){
                array_push($resultArr, $i);
            }
        }
        
        if(count($resultArr)===0){
            echo 'no';
        }  else {
            echo join(', ', $resultArr);
        }
        
        echo '<br>';
        echo '<br>';
    }
    
    printAllThreeDigitsNumberLessThan(1234);
    printAllThreeDigitsNumberLessThan(145);
    printAllThreeDigitsNumberLessThan(15);
    printAllThreeDigitsNumberLessThan(247);
?>
