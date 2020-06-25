<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        for ($x = 0; $x < 18; $x+=1) {
        echo "Ik ben " . $x . "jaar oud en ik mag nog niet stemmen <br>";
        }
        if($x == 18) {
            echo "Ik ben " . $x . "jaar oud en ik mag stemmen <br>";
        }
    ?>  
</body>
</html>