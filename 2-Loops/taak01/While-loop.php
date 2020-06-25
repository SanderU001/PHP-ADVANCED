<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $leeftijd = 0;
    
        while($leeftijd < 18) {
        echo "Ik ben " . $leeftijd . " En ik mag nog niet stemmen <br>";
        $leeftijd+=1;
        }
        if($leeftijd == 18) {
            echo "Ik ben nu 18 jaar oud en ik mag stemmen <br>";
        }
    ?>  
</body>
</html>