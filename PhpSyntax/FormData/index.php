<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Data</title>
        <style>
            input[type="text"], input[type="submit"] {
                display: block;
                margin: 5px;
            }
            form, p {
                margin: 20px auto;
                width: 500px;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name" required="required"/>
            <input type="text" id="age" name="age" placeholder="Age" required="required"/>
            <label for="male">Male</label>
            <input type="radio" id="male" value="m" name="gender"/>
            <label for="female">Female</label>
            <input type="radio" id="female" value="f" name="gender"/>
            <input type="submit" name="submitBtn" value="Submit" />
        </form>
        <?php
            if(isset($_POST['submitBtn'])){
                $name = $_POST["name"];
                $age = $_POST["age"];
                $gender = $_POST["gender"]==='m'?'male':'female';
                
                echo '<p>My name is: '.$name.', I am '.$age.' years old, '.$gender.'.</p>';
            }
        ?>
    </body>
</html>
