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
        <form action="mostFrequentTag.php" method="post">
            <p>Enter tags:</p>
            <input type="text" name="input">
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $tags = explode(', ', $_POST['input']);
                $dictionary = array();
                foreach ($tags as $tag) {
                    if (!array_key_exists($tag, $dictionary)) {
                        $dictionary[$tag] = 1;
                    } else {
                        $dictionary[$tag] += 1;
                    }
                }
                
                asort($dictionary);
                $stack = new SplStack();
                foreach ($dictionary as $key=>$value){
                     $current =  "<div>$key : $value</div>";
                     $stack->push($current);
                }
                
                foreach ($stack as $element){
                    echo $element;
                }
                
                $mostFrequent = end(array_keys($dictionary));
                echo "<br>Most Frequent Tag is: $mostFrequent";
            }
        ?>
    </body>
</html>
