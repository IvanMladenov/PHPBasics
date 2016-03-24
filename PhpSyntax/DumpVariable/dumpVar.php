<?php
    function dumpVar($var){
        $type = gettype($var);
        
        if($type=='integer' || $type == 'double'){
            var_dump($var);
            echo '<br>';
        }else{
            echo $type.'<br>';
        }
    }
    
    dumpVar("hello");
    dumpVar(15);
    dumpVar(1.234);
    dumpVar(array(1,2,3));
    dumpVar((object)[2,34]);
?>

