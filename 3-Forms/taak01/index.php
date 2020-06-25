<html>
<head>
    <title>Eindopdracht</title>
</head>
<body>
<?php $kleuren = array("Red", "Blue", "Green", "Black", "Brown"); ?>
<?php $pixels = array("1px", "2px", "3px", "4px", "5px", "6px", "7px", "8px", "9px", "10px"); ?>
<form action="index2.php" method="post">
    Tekst kleur:
    <select id="txtkleur" name="txtkleur">
        <?php
            foreach($kleuren as $kleur) {
                echo "<option value='$kleur'>$kleur</option>";
            }
         ?>
    </select>
    <br>
    Achtergrond kleur:
    <select id="background" name="background">
        <?php
        foreach ($kleuren as $kleur) {
            echo "<option value='$kleur'>$kleur</option>";
        }
        ?>
    </select>
    <br>
    Tabel rand dikte in pixels:
    <select id="border" name="border">
        <?php
        foreach ($pixels as $px) {
            echo "<option value='$px'>$px</option>";
        }
        ?>
    </select>
    <br>
    Padding in pixels:
    <select id="padding" name="padding">
        <?php
        foreach ($pixels as $px) {
            echo "<option value='$px'>$px</option>";
        }
        ?>
    </select>
    <input type="submit" value="send">
</form>
</body>
</html>