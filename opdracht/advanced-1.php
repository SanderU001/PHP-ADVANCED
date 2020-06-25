<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Dit stukje gaat over de array en waar de array moet komen -->
    <?php $kleuren = array("red", "blue", "green", "black", "brown"); ?>
    <form action="advanced-2.php" method="post">
    <!-- Tekstkleur opties -->
    Textkleur: 
    <select id="txtkleur" name="txtkleur">
        <?php
            foreach($kleuren as $kleur) {
                echo "<option value='$kleur'>$kleur</option>";
            }
         ?>
    </select>
    <!-- Achtergrondkleur opties -->
    Achtergrondkleur: 
    <select id="bgkleur" name="bgkleur">
        <?php
            foreach($kleuren as $kleur) {
                echo "<option value='$kleur'>$kleur</option>";
            }
         ?>
    </select>
    <!-- Tabledikte invuloptie -->
    Tableranddikte (px): <input type="text" name="border"> <br>
    <!-- Padding invuloptie -->
    Padding (px)<input type="text" name="padding"> <br>
    <!-- Versturen van de gegevens naar advanced-2.php bestand -->
    <input type="submit" value="verstuur">
    </form>
</body>
</html>