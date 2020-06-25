<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- De _POST van advanced-1.php naar advanced-2.php -->
    <?php
    $bgkleur = $_POST["bgkleur"]; 
    $dikte = $_POST["border"];
    $padding = $_POST["padding"];
    $textkleur = $_POST["txtkleur"]; 
    ?>
    <!-- De stijling van de tabel + stukjes PHP code van de _POST -->
<style>
td,table,tr,th{
    border: <?php echo $dikte; ?>px solid <?php $bgkleur; ?>;
    border-collapse: collapse; 
    
}
body {
    color: <?php echo $textkleur; ?>;
    background-color: <?php echo $bgkleur; ?>;
}
td,th{
    padding: <?php echo $padding; ?>px;
}
</style>
</head> 
<body>
<table>
<!-- De array met de infomatie van de student en het plaatsen in de tabel -->
<?php 
$Sander = array("voornaam"=>"Sander","achternaam"=>"Uterwijk","klas"=>"9D","Leeftijd"=>19,"Woonplaats"=>"Amsterdam");
function maakRij($key,$value){
    
    echo "<tr> <td> $key </td> <td> $value </td> </tr>" ;
}
    // De foreach die er voor zorgt dat de infomatie in de tabel komt
foreach($Sander as $key => $value){
 echo maakRij($key,$value);
}
?>

</table>
</body>
</html>

