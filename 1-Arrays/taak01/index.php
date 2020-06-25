<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Piet = array(
            "Voornaam" => "Piet",
            "Achternaam" => "Peterson",
            "Leeftijd" => "17 Jaar",
            "Klas" => "8A",
        );
        $Mohammed = array(
            "Voornaam" => "Mohammed",
            "Achternaam" => "Ali",
            "Leeftijd" => "17 Jaar",
            "Klas" => "8B",
        );
        $Els = array(
            "Voornaam" => "Els",
            "Achternaam" => "Van Rietveld",
            "Leeftijd" => "18 Jaar",
            "Klas" => "8C",
        );

            echo "De student heet " . $Mohammed["Voornaam"] . "en het zit in klas " . $Mohammed["Klas"];
    ?>
</body>
</html>