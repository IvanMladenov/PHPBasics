<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <p>Enter tags:</p>
            <input type="text" name="input">
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $tags = explode(', ', $_POST['input']);
                for($i = 0; $i<count($tags); $i++){
                    echo "<div>$i : $tags[$i]</div>";
                }
            }
        ?>
    </body>
</html>
