<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Henkilötunnus</title>
    <link rel="stylesheet" href="henkilotunnus.css">
</head>

<?php
 if($_SERVER["REQUEST_METHOD"]) {
    $etunimi=$_POST["etunimi"];   
    $sukunimi=$_POST["sukunimi"];   
    $sukupuoli=$_POST["sukupuoli"];   
    $htunnus=$_POST["htunnus"];   
    $sposti=$_POST["sposti"];   
    $katuosoite=$_POST["katuosoite"];   
    $postinumero=$_POST["postinumero"];   
    $toimipaikka=$_POST["toimipaikka"];   












    echo "<h2>Yhteystietosi:</h2>";
    echo "Etunimi: $etunimi<br>";
    echo "Sukunimi: $sukunimi<br>";
    echo "Sukupuoli: $sukupuoli<br>";
    echo "Henkilötunnus: $htunnus<br>";
    echo "Sähköposti: $sposti<br>";
    echo "Katuosoite: $katuosoite<br>";
    echo "Postinumero: $postinumero<br>";
    echo "Postitoimipaikka: $toimipaikka<br>";
}
?>
