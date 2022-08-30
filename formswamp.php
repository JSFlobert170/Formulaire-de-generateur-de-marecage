//Flobert JOHNSON 1BTS SNIR
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projet - Swamp</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<div class="text-center"><h1 class="text-primary">Formulaire de génération de Marécages </h1></div>
<div class="container">
    <div class="jumbotron ">

<?php

echo "<form action='swampgenerator.php' method='post'>"
    ."<div class='form-inline pb-md-1'>"
    ."<label class='text-secondary' for='lignes'>Largeur du marécage : </label>"
    ."<select class='custom-select ' name='ligne'>";

for($iii = 10; $iii <= 30; $iii++){
    echo "<option value='$iii'>$iii</option>";
}
echo "</select></div><br>"
    ."<div class='form-inline pb-md-1'><label class='text-secondary' for='colonne'>Longueur du marécage : </label>"
    ."<select class='custom-select' name='colonne'>";

for($iii = 15; $iii <= 50; $iii++){
    echo "<option value='$iii'>$iii</option>";
}
echo "</select></div>"
    ."<input type='submit' value='Générer'>"
    ."</form>";
?>