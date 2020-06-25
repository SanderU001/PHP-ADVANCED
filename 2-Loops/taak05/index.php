<<!DOCTYPE html>

<html>

<body>
	<?php
    $klassen = array(
        $student  = array(
        "voornaam" => "Sander",
        "achternaam" => "Uterwijk",
        "klas" => "9D",
        "Leeftijd" => 19,
        "Woonplaats" => "Amsterdam"
    ));

    echo "<table style='border: 1px solid black; width:75%;'>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$value</th>";
    }
    echo "</tr>";
    echo "</table>";
    echo "</br>";

    $klassen = array(
        $student  = array(
        "voornaam" => "Max",
        "achternaam" => "Middendorp",
        "klas" => "9D",
        "Leeftijd" => 17,
        "Woonplaats" => "Amstelveen"
    ));

    echo "<table style='border: 1px solid black; width:75%;'>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$value</th>";
    }
    echo "</tr>";
    echo "</table>";
	?>
</body>

</html>